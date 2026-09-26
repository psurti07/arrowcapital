<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pay extends CI_Controller
{

	public function index()
	{
		return redirect()->to('Infopage');
	}

	/* START : Card Offer loan */
	public function cardoffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('card-offer');
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

		$this->load->view('cardoffer', ['meta' => $meta, 'productdata' => $productdata, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getcardoffer()
	{
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Payment_Gateway_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('card-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$this->load->model('Site_Digital_Model');

		$existingUser = $this->Site_Digital_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {
			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('cardoffer');
		} 
		else {
			
			  $uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$grandamount = 1;
				}
			}

			$orderId = "ZPLive" . number_format(microtime(true) * 1000, 0, '.', '');
			$productpage = 'Card Offer';

			$returnUrl = base_url('pay/cardresponse');
			if(ZAAKPAY_MODE == 'TEST')
				{
					$url = "https://zaakstaging.zaakpay.com/testMerchantInput.jsp";
				} else {
					$url = "https://api.zaakpay.com/api/paymentTransact/V8";
				}

			$postData = array(
			"merchantIdentifier" => ZAAKPAY_MERCHANT_IDENTIFIER,
			"orderId" => $orderId,
			"returnUrl" => $returnUrl,
			"currency" => 'INR',
			"amount" => $grandamount * 100,
			"buyerEmail" => $emailid,
			"buyerFirstName" => $fullname,
			"buyerPhoneNumber" => $mobileno,
			"buyerCountry" => 'India',
			"productDescription" => 'Card Offer'
			);

			ksort($postData);
			$checksumData = "";
			foreach ($postData as $key => $value) {
				$checksumData .= $key . '=' . $value . '&';
			}

			$checksum = hash_hmac('sha256', $checksumData, ZAAKPAY_SECRET_KEY);

			$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'offerpage' => 3,
			'fullname' => $fullname,
			'mobile' => $mobileno,
			'emailid' => $emailid,
			'amount' => $grandamount,
			'isCustomer' => 0,
			'isActive' => 0,
			'isDelete' => 0
			);

			$this->load->model('Site_Digital_Model');
			$userid = $this->Site_Digital_Model->cardofferorder($data);

			$zaakpaydata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'entryfor' => 3,
			'userid' => $userid,
			'orderid' => $orderId,
			'orderamount' => $grandamount,
			'ordernote' => $productdata->productname,
			);

			$this->load->model('Site_Payment_Gateway_Model');
			$response = $this->Site_Payment_Gateway_Model->zaakpayentry($zaakpaydata);

			$this->load->view('zaakpay-checkout', ['postData' => $postData, 'checksum' => $checksum, 'url' => $url]);
		}
	}

	public function cardresponse()
	{
		
		$this->load->model('Site_Digital_Model');
		$this->load->model('Site_Payment_Gateway_Model');
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('home');

		$orderId = $_POST["orderId"];
		$responseCode = $_POST["responseCode"];
		$orderAmount = $_POST["amount"] / 100;
		$txnId = $_POST["pgTransId"];
		$paymentMode = $_POST["paymentMode"];
		$recd_checksum = $_POST['checksum'];

		$checksum = $checksumData = '';

		$checksumsequence = array(
			"amount",
			"bank",
			"bankid",
			"cardId",
			"cardScheme",
			"cardToken",
			"cardhashid",
			"doRedirect",
			"orderId",
			"paymentMethod",
			"paymentMode",
			"responseCode",
			"responseDescription",
			"productDescription",
			"product1Description",
			"product2Description",
			"product3Description",
			"product4Description",
			"pgTransId",
			"pgTransTime"
		);

		foreach ($checksumsequence as $seqvalue) {
			if (array_key_exists($seqvalue, $_POST)) {
				$checksumData .= $seqvalue;
				$checksumData .= "=";
				$checksumData .= $_POST[$seqvalue];
				$checksumData .= "&";
			}
		}

		$checksum = hash_hmac('sha256', $checksumData, ZAAKPAY_SECRET_KEY);

		if ($checksum == $recd_checksum) {
			$paymentdata = $this->Site_Payment_Gateway_Model->getzaakpayentry($orderId);

			$zaakpaydata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'orderamount' => $orderAmount,
				'statuscode' => $responseCode,
				'transactionid' => $txnId,
				'paymentmode' => $paymentMode
			);
			$response1 = $this->Site_Payment_Gateway_Model->updatezaakpayentry($paymentdata->id, $zaakpaydata);

			$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

			if ($responseCode == 100 || $responseCode == 208 || $responseCode == 601) {
				$cardno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $orderAmount,
					'paymentid' => $txnId,
					'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);
				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$sent = $this->Site_Digital_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);

				$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	/* STOP : Card Offer loan */

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

			$this->load->model('Site_Digital_Model');
			$userid = $this->Site_Digital_Model->cardofferorder($data);

			$orderid = number_format(microtime(true) * 1000, 0, '.', '');
			$encData = null;

			if (SABPAISA_MODE == 'PROD') {
				$spDomain = "https://securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1";
			} else {
				$spDomain = "https://stage-securepay.sabpaisa.in/SabPaisa/sabPaisaInit?v=1";
			}

			$returnUrl = base_url('pay/festivalresponse');

			$encData = "?clientCode=" . SABPAISA_CLIENT_CODE . "&transUserName=" . SABPAISA_USERNAME . "&transUserPassword=" . SABPAISA_PASSWORD . "&amount=" . $roundamount . "&amountType=INR&clientTxnId=" . trim($orderid) . "&payerName=" . trim($fullname) . "&payerMobile=" . trim($mobileno) . "&payerEmail=" . trim($emailid) . "&mcc=5137&channelId=#&callbackUrl=" . $returnUrl;

			$this->load->helper('subpaisa');
			$encryptData = encrypt(SABPAISA_AUTH_KEY, SABPAISA_AUTH_IV, $encData);

			$postData = array(
				'clientCode' => SABPAISA_CLIENT_CODE,
				'encryptData' => $encryptData,
				'action' => $spDomain
			);

			$subpaisadata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'entryfor' => 7,
				'userid' => $userid,
				'orderid' => $orderid,
				'orderamount' => $roundamount,
				'ordernote' => $productdata->productname
			);
			$response = $this->Site_Payment_Gateway_Model->subpaisaentry($subpaisadata);

			$this->load->view('sabpaisa-checkout', ['postData' => $postData]);
		}
	}

	public function festivalresponse()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		$grandtotal = $netamount = $cgstamount = $sgstamount = $igstamount = 0;
		$decText = null;

		if (isset($_REQUEST)) {
			$query = $_REQUEST['encResponse'];
			$query = str_replace("%2B", "+", $query);
			$decText = null;

			$this->load->helper('subpaisa');
			$decText = decrypt(SABPAISA_AUTH_KEY, SABPAISA_AUTH_IV, $query);
			$token = strtok($decText, "&");

			$i = 0;
			while ($token !== false) {
				$i = $i + 1;
				$token1 = strchr($token, "=");
				$token = strtok("&");
				$stringpart = ltrim($token1, "=");

				if ($i == 1) {
					$payerName = $stringpart;
				}
				if ($i == 2) {
					$payerEmail = $stringpart;
				}
				if ($i == 3) {
					$payerMobile = $stringpart;
				}
				if ($i == 4) {
					$clientTxnId = $stringpart;
				}
				if ($i == 6) {
					$amount = $stringpart;
				}
				if ($i == 8) {
					$paidAmount = $stringpart;
				}
				if ($i == 9) {
					$paymentMode = $stringpart;
				}
				if ($i == 10) {
					$bankName = $stringpart;
				}
				if ($i == 12) {
					$status = $stringpart;
				}
				if ($i == 13) {
					$statusCode = $stringpart;
				}
				if ($i == 15) {
					$sabpaisaTxnId = $stringpart;
				}
				if ($i == 20) {
					$bankTxnId = $stringpart;
				}
			}

			$this->load->model('Site_Digital_Model');
			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getsubpaisaentry($clientTxnId);

			$subpaisadata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'referenceid' => $sabpaisaTxnId,
				'txstatus' => $status,
				'paymentmode' => $paymentMode
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatesubpaisaentry($paymentdata->id, $subpaisadata);

			if ($statusCode == '0000') {
				$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

				$cardno = random_code(16);
				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'paymentid' => $sabpaisaTxnId,
					'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => $response]);
			} else if ($statusCode == '0300') {
				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
			} else {
				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}
	/* END : Festival Offer loan */
}
?>
