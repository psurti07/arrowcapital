<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pay extends CI_Controller
{

	public function index()
	{
		return redirect()->to('Infopage');
	}

	/* START : IVRpayment Offer loan */
	public function ivrpaymentoffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('ivrpayment-offer');
		
		$banklist = $this->Site_Info_Model->getbanklist(8);
		$testimoniallist = $this->Site_Info_Model->gettestimoniallist(1);

		if ($prores->inOffer == 1) {
			$productdata = array(
				'inOffer' => $prores->inOffer,
				'amount' => $prores->amount,
				'offeramount' => $prores->offeramount,
				'offerdate' => date('Y/m/d', strtotime('+1 days')) . ' 24:00:00',
				'payamount' => $prores->offeramount + ($prores->offeramount * 0.18)
			);
		} else {
			$productdata = array(
				'inOffer' => 0,
				'amount' => $prores->amount,
				'offeramount' => 0,
				'offerdate' => '',
				'payamount' => $prores->amount + ($prores->amount * 0.18)
			);
		}

		$this->load->model('Site_Info_Model');
		$roipackages = $this->Site_Info_Model->getroipackages(11);

		$this->load->view('ivrpaymentoffer', ['meta' => $meta, 'productdata' => $productdata, 'roipackages' => $roipackages, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getivrpaymentoffer()
	{
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$productdata = $this->Site_Info_Model->getproductdetails('ivrpayment-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);
		$roundamount = floor($grandamount);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];
		$this->load->model('Site_Digital_Model');

		$existingUser = $this->Site_Digital_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {
			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('ivrpaymentoffer');
		}
		else {
			
			$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$roundamount = 1;
				}
			}

			$data = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'offerpage' => 4,
				'fullname' => $fullname,
				'mobile' => $mobileno,
				'emailid' => $emailid,
				'amount' => $roundamount,
				'isCustomer' => 0,
				'isActive' => 0,
				'isDelete' => 0
			);

			$this->load->model('Site_Digital_Model');
			$userid = $this->Site_Digital_Model->cardofferorder($data);

			$this->load->helper('paygic');

			$response = createMerchantToken();

			$orderid = "PAYGIC" . number_format(microtime(true) * 1000, 0, '.', '');
			
			
			$token = $response->data->token;
			$returnUrl = base_url('pay/iverresponse/'.$orderid.'/'.$token);

			$postData = array(
				'mid' => PAYGIC_MID,
				"merchantReferenceId"=> $orderid, // Unique reference ID for the merchant
				"amount"=> $roundamount, // Transaction amount
				"customer_mobile"=> $mobileno, // Customer's mobile number
				"customer_name"=> $fullname, // Customer's name
				"customer_email"=> $emailid, // Customer's email
				"redirect_URL"=> $returnUrl,
				"failed_URL"=> $returnUrl,
			);

			$createresponse = createPaymentPage($postData, $token);
			$post_data = json_decode($createresponse);
			$post_reponse = array(
				"status"=>$post_data->status,
				"statusCode"=>$post_data->statusCode,
				"msg"=>$post_data->msg,
				"data"=>array(
					"payPageUrl"=>$post_data->data->payPageUrl,
					"expiry"=>0,
					"amount"=>$post_data->data->amount,
					"paygicReferenceId"=>$post_data->data->paygicReferenceId,
					"merchantReferenceId"=>$post_data->data->merchantReferenceId,
				)
				
				);
				
				$paygicdata = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'entryfor' => 4,
					'userid' => $userid,
					'orderid' => $orderid,
					'orderamount' => $roundamount,
					'ordernote' => $productdata->productname,
				);
		
				$this->load->model('Site_Payment_Gateway_Model');
				$response = $this->Site_Payment_Gateway_Model->paygicentry($paygicdata);

				//$post_data = json_decode($createresponse);
				redirect($post_data->data->payPageUrl);
		}
	}

	public function iverresponse()
	{
		
		$this->load->helper('paygic');
	
		$createresponse = checkPaymentStatus($orderid, $token);

		$response_data = json_decode($createresponse);

		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		$grandtotal = $netamount = $cgstamount = $sgstamount = $igstamount = 0;
		$decText = null;

		if (isset($response_data)) {
			
			$this->load->model('Site_Digital_Model');
			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getpaygicentry($response_data->data->merchantReferenceId);

			$paygicdata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'transactionid' => $response_data->data->paygicReferenceId,
				'statuscode' => $response_data->txnStatus,
				'paymentmode' => '',
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatepaygicentry($paymentdata->id, $paygicdata);

			if ($response_data->txnStatus == 'SUCCESS') {
				$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

				$cardno = random_code(16);
				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'paymentid' => $response_data->data->UTR,
					'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	public function cardcallback()
	{
		die;
	}

	/* START : Festival Offer loan */
	public function festivaloffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('festival-offer');
		$banklist = $this->Site_Info_Model->getbanklist(8);
		$testimoniallist = $this->Site_Info_Model->gettestimoniallist(1);

		if ($prores->inOffer == 1) {
			$productdata = array(
				'inOffer' => $prores->inOffer,
				'amount' => $prores->amount,
				'offeramount' => $prores->offeramount,
				'offerdate' => date('Y/m/d', strtotime('+1 days')) . ' 24:00:00',
				'payamount' => $prores->offeramount + ($prores->offeramount * 0.18)
			);
		} else {
			$productdata = array(
				'inOffer' => 0,
				'amount' => $prores->amount,
				'offeramount' => 0,
				'offerdate' => '',
				'payamount' => $prores->amount + ($prores->amount * 0.18)
			);
		}

		$this->load->model('Site_Info_Model');
		$roipackages = $this->Site_Info_Model->getroipackages(11);

		$this->load->view('festivaloffer', ['meta' => $meta, 'productdata' => $productdata, 'roipackages' => $roipackages, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getfestivaloffer()
	{
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$productdata = $this->Site_Info_Model->getproductdetails('festival-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);
		$roundamount = floor($grandamount);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$this->load->model('Site_Digital_Model');
		
		$existingUser = $this->Site_Digital_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {
			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('festivaloffer');
		}
		else {
			
			$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$grandamount = 1;
				}
			}

		$orderid = 'order_' . number_format(microtime(true) * 1000, 0, '.', '');
		$return_url = base_url('pay/festivalresponse');

		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'offerpage' => 7,
			'fullname' => $fullname,
			'mobile' => $mobileno,
			'emailid' => $emailid,
			'amount' => $grandamount,
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0
		);

		$userid = $this->Site_Digital_Model->cardofferorder($data);

		$paymentData = [
			"order_id" => $orderid,
			"customer_id" => strval($userid),
			'amount' => $grandamount,
			'currency' => 'INR',
			'name' => $fullname,
			'email_id' => $emailid,
			'contact_number' => $mobileno,
			'mtx' => $orderid,
			'return_url' => $return_url
		];

		$this->load->helper('openmoney_helper');
		$environment = OPENMONEY_MODE;

		if (OPENMONEY_MODE == "PROD") {
			$accesskey = OPENMONEY_API_KEY;
			$secretkey = OPENMONEY_API_SECRET;
		} else {
			$accesskey = OPENMONEY_API_KEY;
			$secretkey = OPENMONEY_API_SECRET;
		}

		$payment_token = create_payment_token($environment, $accesskey, $secretkey, $paymentData);

		if (empty($error) && isset($payment_token['error'])) {
			$error = 'E55 Payment error. ' . ucfirst($payment_token['error']);
			if (isset($payment_token['error_data'])) {
				foreach ($payment_token['error_data'] as $d)
					$error .= " " . ucfirst($d[0]);
			}
		}

		if (empty($error) && (!isset($payment_token["id"]) || empty($payment_token["id"]))) {
			$error = 'Payment error. ' . 'Layer token ID cannot be empty.';
		}

		if (!empty($payment_token["id"]))
			$payment_token_data = get_payment_token($environment, $accesskey, $secretkey, $payment_token["id"]);

		if (empty($error) && !empty($payment_token_data)) {
			if (isset($layer_payment_token_data['error'])) {
				$error = 'E56 Payment error. ' . $payment_token_data['error'];
			}

			if (empty($error) && $payment_token_data['status'] == "paid") {
				$error = "Layer: this order has already been paid.";
			}

			if (empty($error) && $payment_token_data['amount'] != $paymentData['amount']) {
				$error = "Layer: an amount mismatch occurred.";
			}

			$jsdata['payment_token_id'] = html_entity_decode((string) $payment_token_data['id'], ENT_QUOTES, 'UTF-8');
			$jsdata['accesskey'] = html_entity_decode((string) $accesskey, ENT_QUOTES, 'UTF-8');

			$hash = create_hash(array(
				'layer_pay_token_id' => $payment_token_data['id'],
				'layer_order_amount' => $payment_token_data['amount'],
				'tranid' => $orderid,
			), $accesskey, $secretkey);

			$postData = "<form action='" . base_url('pay/festivalresponse') . "' method='post' style='display: none' name='layer_payment_int_form'>
				<input type='hidden' name='layer_pay_token_id' value='" . $payment_token_data['id'] . "'>
				<input type='hidden' name='tranid' value='" . $orderid . "'>
				<input type='hidden' name='layer_order_amount' value='" . $payment_token_data['amount'] . "'>
				<input type='hidden' id='layer_payment_id' name='layer_payment_id' value=''>
				<input type='hidden' id='fallback_url' name='fallback_url' value=''>
				<input type='hidden' name='hash' value='" . $hash . "'>
				</form>";
			$postData .= "<script>";
			$postData .= "var layer_params = " . json_encode($jsdata) . ';';

			$postData .= "</script>";
			$postData .= '<script src="' . base_url('assets/js/layer_checkout.js') . '"></script>';

		}
		$openmoneydata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 7,
			'userid' => strval($userid),
			'orderid' => $orderid,
			'orderamount' => $grandamount,
			'ordernote' => $productdata->productname,
		);
		$response = $this->Site_Payment_Gateway_Model->openmoneyentry($openmoneydata);

		$this->load->view('openmoney_checkout', ['postData' => $postData]);
		}
	}

	public function festivalresponse()
	{
		
		$grandtotal = $netamount = $cgstamount = $sgstamount = $igstamount = 0;
		$this->load->model('Site_Payment_Gateway_Model');
		$this->load->model('Site_Digital_Model');

		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		$this->load->helper('openmoney_helper');

		$environment = OPENMONEY_MODE;

		if (OPENMONEY_MODE == "PROD") {
			$accesskey = OPENMONEY_API_KEY;
			$secretkey = OPENMONEY_API_SECRET;
		} else {
			$accesskey = OPENMONEY_API_KEY;
			$secretkey = OPENMONEY_API_SECRET;
		}

		if ($_POST['layer_payment_id'] == '') {
			$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
		}

		$data = array(
			'layer_pay_token_id' => $_POST['layer_pay_token_id'],
			'layer_order_amount' => $_POST['layer_order_amount'],
			'tranid' => $_POST['tranid'],
		);

		if (empty($error) && verify_hash($data, $_POST['hash'], $accesskey, $secretkey) && !empty($data['tranid'])) {
			$payment_data = get_payment_details($environment, $accesskey, $secretkey, $_POST['layer_payment_id']);

			if (isset($payment_data['error'])) {
				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
				die;
			}

			if (empty($error) && isset($payment_data['id']) && !empty($payment_data)) {
				if ($payment_data['payment_token']['id'] != $data['layer_pay_token_id']) {
					$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
				} else {
					if ($payment_data['status'] == 'captured' && $payment_data['payment_token']['status'] == 'paid') {
						$orderid = $payment_data['payment_token']['mtx'];
						$txstatus = $payment_data['status'];
						$referenceid = $payment_data['id'];
						$paymentmode = $payment_data['payment_token']['status'];
						$orderamount = $payment_data['payment_token']['amount'];

						$paymentdata = $this->Site_Payment_Gateway_Model->getopenmoneyentry($orderid);

						$openmoneydata = array(
							'rec_date' => date('Y-m-d H:i:s'),
							'referenceid' => $referenceid,
							'txstatus' => $txstatus,
							'paymentmode' => $paymentmode
						);
						$response1 = $this->Site_Payment_Gateway_Model->updateopenmoneyentry($paymentdata->id, $openmoneydata);

						$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);
						$cardno = random_code(16);

						$data = array(
							'rec_date' => date('Y-m-d H:i:s'),
							'card_number' => $cardno,
							'registration_date' => date('Y-m-d'),
							'expiry_date' => date('Y-m-d', strtotime('+6 months')),
							'amount' => $orderamount,
							'paymentid' => $referenceid,
							'isActive' => 1
						);

						$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

						$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);
						$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'true']);
					} else {
						$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
					}
				}
			}
		} else {
			$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}
	/* END : Festival Offer loan */
}
?>
