<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentGatewayStatusCron extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function rzpwebhookresponse() {
        log_message('error', '------ Razorpay webhook start here ------');
        
		// Get raw post data
        $webhookBody = file_get_contents('php://input');

        // Razorpay signature from headers
        $razorpaySignature = $_SERVER['HTTP_X_RAZORPAY_SIGNATURE'] ?? '';

        // Your Razorpay webhook secret
        $webhookSecret = RAZOR_KEY_SECRET;

        // Verify signature
        $expectedSignature = hash_hmac('sha256', $webhookBody, $webhookSecret);

        if ($razorpaySignature !== $expectedSignature) {
            log_message('error', 'Invalid Razorpay webhook signature');
            show_error('Invalid signature', 403);
        }

        // Convert JSON to array
        $payload = json_decode($webhookBody, true);

        // Log payload for debugging
        // log_message('error', "Razorpay Webhook: " . print_r($payload, true));

        // Process event
        $event = $payload['event'];

        switch ($event) {
            case "payment.captured":
                $this->paymentCaptured($payload);
                break;

            case "payment.failed":
                $this->paymentFailed($payload);
                break;

            default:
                log_message('info', "Razorpay Unhandled event: $event");
        }

        // Respond 200 to Razorpay
        echo "OK";
	}
	
	private function paymentCaptured($data) {
        $this->load->helper('razorpay');

		$this->load->model('Site_Digital_Model');
		$this->load->model('Site_Payment_Gateway_Model');
		$this->load->model('Site_Info_Model');

		$paymentdata = $this->Site_Payment_Gateway_Model->getrazorpayentry($data['payload']['payment']['entity']['order_id']);

		if($paymentdata->txstatus == '' || $paymentdata->txstatus == NULL) {
			$razorpaydata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'referenceid' => $data['payload']['payment']['entity']['id'],
				'txstatus' => $data['payload']['payment']['entity']['status']
			);

			$response1 = $this->Site_Payment_Gateway_Model->updaterazorpayentry($paymentdata->id, $razorpaydata);
		
			$cardno = random_code(16);
			$amount = (isset($paymentdata->orderamount)) ? $paymentdata->orderamount : 0;
			$paymentid = (isset($paymentdata->referenceid)) ? $paymentdata->referenceid : '';

			if($paymentdata->entryfor == 11 || $paymentdata->entryfor == 12) {
    			$isentry = $this->Site_Digital_Model->checksubscriptionentry($paymentid);

				if ($isentry == 0) {
                    $userdata = $this->Site_Digital_Model->checkuserregdata($paymentdata->userid);
					$data = array(
						'rec_date' => date('Y-m-d H:i:s'),
                        'userid' => $userdata->userid,
                        'registration_date' => date('Y-m-d'),
                        'expiry_date' => date('Y-m-d', strtotime('+6 months')),
                        'card_number' => $cardno,
                        'amount' => $amount,
                        'paymentid' => $paymentid,
                        'isActive' => 1,
                        'isDelete' => 0
					);
					$memberid = $this->Site_Digital_Model->subscriptionorder($data);

					$password = random_code(6);
					$passwordkey = stringCrypt($password, 'encrypt');
					$refcode = strtolower(substr(str_replace(" ", "", $userdata->fullname), 0, 3));
					$refcode .= substr($userdata->mobile, -4);

					$regdata = array(
                        'rec_date' => date('Y-m-d H:i:s'),
                        'update_date' => date('Y-m-d H:i:s'),
                        'password' => $passwordkey,
                        'refcode' => $refcode,
                        'process_step' => 4,
                        'isUser' => 2
                    );
					$response2 = $this->Site_Digital_Model->updateregistration($userdata->userid, $regdata);

					$invoiceno = $this->Site_Info_Model->getinvoiceno();

					if ($userdata->cardtype == 12) {
                        $productslug = "business-subscription-plan";
                        $invfor = 2;
                        $invprefix = "BL_";
                    } else {
                        $productslug = "personal-subscription-plan";
                        $invfor = 1;
                        $invprefix = "PL_";
                    }

					$productdata = $this->Site_Info_Model->getproductdetails($productslug);
					$netamount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;

					if ($userdata->state == 'Gujarat') {
						$cgstamount = $netamount * 0.09;
						$sgstamount = $netamount * 0.09;
					} else {
						$igstamount = $netamount * 0.18;
					}

					$grandtotal = $netamount + $cgstamount + $sgstamount + $igstamount;

					$invdata = array(
						'rec_date' => date('Y-m-d H:i:s'),
                        'userid' => $userdata->userid,
                        'cardid' => $memberid,
                        'inv_for' => $invfor,
                        'inv_prefix' => $invprefix,
                        'inv_number' => $invoiceno,
                        'inv_date' => date('Y-m-d'),
                        'inv_price' => number_format($netamount,2),
                        'inv_cgst' => number_format($cgstamount,2),
                        'inv_sgst' => number_format($sgstamount,2),
                        'inv_igst' => number_format($igstamount,2),
                        'inv_grandtotal' => number_format($grandtotal,2),
                        'isDelete' => 0
					);

					$responseinvoice = $this->Site_Digital_Model->generateinvoice($invdata, $invoiceno);

					$remote_data = array(
						'company_code' => COMPANY_CODE,
						'company_local_ip' => LOCAL_IP,
						'product_code' => 'subscription',
						'customer_name' => $userdata->fullname,
						'customer_email' => $userdata->email,
						'customer_mobile' => $userdata->mobile,
						'userid' => $userdata->userid,
						'card_number' => $cardno,
						'rec_date' => date('Y-m-d H:i:s'),
						'inv_for' => $invfor,
						'inv_prefix' => $invprefix,
						'inv_number' => $invoiceno,
						'inv_date' => date('Y-m-d'),
						'inv_price' => $netamount,
						'inv_cgst' => $cgstamount,
						'inv_sgst' => $sgstamount,
						'inv_igst' => $igstamount,
						'inv_grandtotal' => $grandtotal,
					);

					$api_response = send_order_data(json_encode($remote_data));
                    
                    $data1 = array(
                        'apiKey' => AISENSY_KEY,
                        'campaignName' => "cred_23may",
                        'destination' => '+91' . $userdata->mobile,
                        'userName' => $userdata->fullname,
                        'attributes' => array(
                            'userid' => $userdata->mobile,
                            'password' => $password
                        ),
                        'templateParams' => array('$userid', '$password'),
                        'tags' => array('Payment Successful')
                    );
                    $restrack1 = aisensy_track($data1);

                    $data2 = array(
                        "fullPhoneNumber" => '+91' . $userdata->mobile,
                        "callbackData" => "some text here",
                        "type" => "Template",
                        "template" => array(
                            "name" => "cred",
                            "languageCode" => "en",
                            "bodyValues" => array(
                                $userdata->mobile,
                                $password
                            ),
                        )
                    );
                    $restrack2 = interakt_track($data2);

					$userdate = $this->Site_Digital_Model->checkuserdata($userdata->userid);

					$fbclidpl = "";

					$firstname = strtolower(strtok($userdate->fullname, " "));
					$city = strtolower(preg_replace("/[^a-zA-Z]+/", "", $userdate->city));
					$state = getStateAbbreviation($userdate->state);
					$orderid = "SB" . date('md') . random_code(4);

					$fbdata = array(
						'type' => 'digital',
						'firstname' => $firstname,
						'mobile' => '91' . $userdate->mobile,
						'email' => $userdate->email,
						'city' => $city,
						'state' => $state,
						'orderid' => $orderid,
						'sourceurl' => base_url('/digital/paymentResponse/true')
					);
					
					if (get_cookie('fbclidpl') != "") {
						$fbclidpl = "fb.0." . round(microtime(true) * 1000) . "." . get_cookie('fbclidpl');
						$fbdata['fbclid'] = $fbclidpl;
					} else {
						$fbdata['fbclid'] = "";
					}

					$fbresponse = fbconversioncurl($fbdata);

                    $this->load->helper('interakt');

					$data3 = array(
						'phoneNumber' => $userdate->mobile,
						'countryCode' => '+91',
						'traits' => array(
							'name' => $userdate->fullname
						),
						'tags' => array('Payment Successful')
					);
					$restrack3 = user_track($data3);

					$data4 = array(
						'phoneNumber' => $userdate->mobile,
						'countryCode' => '+91',
						'event' => 'Payment Successful'
					);
				   $restrack4 = event_track($data4); 

					$maildata = array(
                        'fullname' => $userdata->fullname,
                        'mobile' => $userdata->mobile,
                        'email' => $userdata->email,
                        'password' => $password,
                        'order_number' => $invoiceno,
                        'order_date' => date('d-m-Y'),
                        'order_amount' => $grandtotal
                    );

                    $sent = $this->Site_Digital_Model->sendSuccessGreetings($maildata);
					
    			}
			} 
		}
		
		$orderId = $data['payload']['payment']['entity']['order_id'];
        log_message('error', "Razorpay Payment Order: $orderId");
        
        $paymentId = $data['payload']['payment']['entity']['id'];
        log_message('error', "Razorpay Payment Captured: $paymentId");
    }

    private function paymentFailed($data) {
		$this->load->helper('razorpay');

        $this->load->model('Site_Payment_Gateway_Model');
        
		$paymentdata = $this->Site_Payment_Gateway_Model->getrazorpayentry($data['payload']['payment']['entity']['order_id']);

		$razorpaydata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'referenceid' => $data['payload']['payment']['entity']['id'],
			'txstatus' => $data['payload']['payment']['entity']['status']
		);

		$response1 = $this->Site_Payment_Gateway_Model->updaterazorpayentry($paymentdata->id, $razorpaydata);

        $orderId = $data['payload']['payment']['entity']['order_id'];
        log_message('error', "Razorpay Payment Order: $orderId");
        
        $paymentId = $data['payload']['payment']['entity']['id'];
        log_message('error', "Razorpay Payment Failed: $paymentId");
    }
}