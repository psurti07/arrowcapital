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

		$this->load->model('Site_Digital_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('card-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);
		$roundamount = floor($grandamount);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];


		$existingUser = $this->Site_Digital_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {

			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('cardoffer');
		} else {
			
$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$roundamount = 1;
				}
			}

			$data = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'offerpage' => 3,
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

			$receiptid = number_format(microtime(true) * 1000, 0, '.', '');

			$orderdata = array(
				'amount' => $roundamount * 100,
				'currency' => 'INR',
				'receipt' => $receiptid,
				'notes' => array(
					'key1' => $fullname,
					'key2' => $mobileno
				)
			);

			$this->load->helper('razorpay');
			$orderres = generateorder($orderdata);
			$successURL = base_url('pay/cardresponse');
			$failURL = base_url('cardoffer');

			$razorpaydata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'entryfor' => 3,
				'userid' => $userid,
				'orderid' => $orderres->id,
				'orderamount' => $roundamount,
				'ordernote' => $productdata->productname
			);

			$this->load->model('Site_Payment_Gateway_Model');
			$razorpayentry = $this->Site_Payment_Gateway_Model->razorpayentry($razorpaydata);

			$postData = array(
				'applyid' => $userid,
				'fullname' => $fullname,
				'mobile' => $mobileno,
				'email' => $emailid,
				'orderamount' => $roundamount,
				'orderid' => $orderres->id,
				'description' => $productdata->productname,
				'successURL' => $successURL,
				'failURL' => $failURL
			);

			$this->load->view('razorpay-checkout', ['postData' => $postData]);
		}
	}

	public function cardresponse()
	{

		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (isset($_REQUEST['paymentid']) && $_REQUEST['paymentid'] != '') {
			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getrazorpayentry($_POST["orderid"]);

			$razorpaydata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'referenceid' => $_REQUEST['paymentid'],
				'txstatus' => 'Success'
			);

			$response1 = $this->Site_Payment_Gateway_Model->updaterazorpayentry($paymentdata->id, $razorpaydata);

			$this->load->model('Site_Digital_Model');
			$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

			$amount = (isset($_REQUEST['orderamount'])) ? $_REQUEST['orderamount'] : 0;
			$paymentid = (isset($_REQUEST['paymentid'])) ? $_REQUEST['paymentid'] : '';

			$isentry = $this->Site_Digital_Model->checkcardofferentry($paymentid);

			if ($isentry == 0) {
				$cardno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $amount,
					'paymentid' => $paymentid,
					'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('cardoffer-response', ['meta' => $meta, 'status' => 'true']);
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
		$productdata = $this->Site_Info_Model->getproductdetails('ivrpayment-offer');
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
			redirect('ivrpaymentoffer');
		} else {


			$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$grandamount = 1;
				}
			}

			$data = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'offerpage' => 4,
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



			if (PHONEPE_MODE == "PROD") {
				$curlurl = 'https://api.phonepe.com/apis/hermes/pg/v1/pay';
			} else {
				$curlurl = 'https://api-preprod.phonepe.com/apis/hermes/pg/v1/pay';
			}

			$this->load->helper('phonepe');
			$token_data = create_token();

			$token = $token_data->access_token;

			$returnUrl = base_url('pay/iverresponse?orderID=' . $orderid . '&token=' . $token);
			$callbackUrl = base_url('pay/ivercallback');

			$phonepedata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'entryfor' => 4,
				'userid' => $userid,
				'orderid' => $orderid,
				'orderamount' => $grandamount,
				'ordernote' => $productdata->productname
			);
			$this->load->model('Site_Payment_Gateway_Model');
			$response = $this->Site_Payment_Gateway_Model->phonepeentry($phonepedata);

			$data_res = array(
				"merchantOrderId" => $orderid,
				"amount" =>  $grandamount * 100,
				"paymentFlow" => array(
					"type" => "PG_CHECKOUT",
					"message" => "Payment message used for collect requests",
					"merchantUrls" => array(
						"redirectUrl" => $returnUrl,
					)
				)
			);
			$checkout_data = checkout_payment($data_res, $token);

			if ($checkout_data) {
				if ($checkout_data->redirectUrl) {
					header("location:" . $checkout_data->redirectUrl);
					die;
				} else {
					return redirect("ivrpaymentoffer");
					die;
				}
			} else {
				return redirect("ivrpaymentoffer");
				die;
			}
		}
	}

	public function iverresponse()
	{

		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (!isset($_POST["code"]) || !isset($_POST["transactionId"]) || !isset($_POST["providerReferenceId"])) {
			return redirect("ivrpaymentoffer");
			die;
		}

		$this->load->model('Site_Payment_Gateway_Model');
		$paymentdata = $this->Site_Payment_Gateway_Model->getphonepeentry($_POST["transactionId"]);

		$txStatus = $_POST["code"];
		$transactionId = $_POST["transactionId"];
		$referenceId = $_POST["providerReferenceId"];

		$phonepedata = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'referenceid' => $referenceId,
			'txstatus' => $txStatus
		);

		$response1 = $this->Site_Payment_Gateway_Model->updatephonepeentry($paymentdata->id, $phonepedata);

		$this->load->model('Site_Digital_Model');
		$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

		if ($txStatus == "PAYMENT_SUCCESS") {
			$isentry = $this->Site_Digital_Model->checkcardofferentry($referenceId);
			if ($isentry == 0) {
				$cardno = random_code(16);

				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'amount' => $paymentdata->orderamount,
					'paymentid' => $referenceId,
					'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'true']);
			}
		} else if ($txStatus == "PAYMENT_FAILURE") {
			$sent = $this->Site_Digital_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'false']);
		} else {
			$sent = $this->Site_Digital_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
			$this->load->view('ivrpaymentoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}

	public function ivercallback()
	{
		die;
	}

	/* START : Mega Offer loan */
	public function megaoffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('mega-offer');
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

		$this->load->view('megaoffer', ['meta' => $meta, 'productdata' => $productdata, 'roipackages' => $roipackages, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}


	public function getmegaoffer()
	{

		$this->load->model('Site_Digital_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('mega-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

		$existingUser = $this->Site_Digital_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {

			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('megaoffer');
		} else {


			$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$grandamount = 1;
				}
			}

			$data = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'offerpage' => 6,
				'fullname' => $fullname,
				'mobile' => $mobileno,
				'emailid' => $emailid,
				'amount' => $grandamount,
				'isCustomer' => 0,
				'isActive' => 0,
				'isDelete' => 0
			);

			$userid = $this->Site_Digital_Model->cardofferorder($data);

			$orderId = number_format(microtime(true) * 1000, 0, '.', '');

			$returnUrl = base_url('pay/megaresponse');

			$url = "https://api.zaakpay.com/api/paymentTransact/V8";

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
				"productDescription" => $productdata->productname
			);

			ksort($postData);
			$checksumData = "";

			foreach ($postData as $key => $value) {
				$checksumData .= $key . '=' . $value . '&';
			}

			$checksum = hash_hmac('sha256', $checksumData, ZAAKPAY_SECRET_KEY);

			$zaakpaydata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'entryfor' => 6,
				'userid' => $userid,
				'orderid' => $orderId,
				'orderamount' => $grandamount,
				'ordernote' => $productdata->productname
			);
			$response = $this->Site_Payment_Gateway_Model->zaakpayentry($zaakpaydata);
			$userdata = $this->Site_Digital_Model->checkuser($mobileno);

			$this->load->view('zaakpay-checkout', ['postData' => $postData, 'checksum' => $checksum, 'url' => $url]);
		}
	}

	public function megaresponse()
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

				$this->load->view('megaoffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$sent = $this->Site_Digital_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);

				$this->load->view('megaoffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('megaoffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}
	/* END : Festival Offer loan */

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
		$this->load->model('Site_Digital_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$productdata = $this->Site_Info_Model->getproductdetails('festival-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);
		$roundamount = floor($grandamount);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];


		$existingUser = $this->Site_Digital_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {

			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('festivaloffer');
		} else {

			$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$roundamount = 1;
				}
			}

			$data = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'offerpage' => 7,
				'fullname' => $fullname,
				'mobile' => $mobileno,
				'emailid' => $emailid,
				'amount' => $roundamount,
				'isCustomer' => 0,
				'isActive' => 0,
				'isDelete' => 0
			);

			$userid = $this->Site_Digital_Model->cardofferorder($data);

			$this->load->helper('paygic');
			$response = createMerchantToken();

			$orderid = "PAYGIC" . number_format(microtime(true) * 1000, 0, '.', '');


			$token = $response->data->token;
			$returnUrl = base_url('pay/festivalresponse/' . $orderid . '/' . $token);

			$postData = array(
				'mid' => PAYGIC_MID,
				"merchantReferenceId" => $orderid, // Unique reference ID for the merchant
				"amount" => $roundamount, // Transaction amount
				"customer_mobile" => $mobileno, // Customer's mobile number
				"customer_name" => $fullname, // Customer's name
				"customer_email" => $emailid, // Customer's email
				"redirect_URL" => $returnUrl,
				"failed_URL" => $returnUrl,
			);

			$createresponse = createPaymentPage($postData, $token);
			$post_data = json_decode($createresponse);
			$post_reponse = array(
				"status" => $post_data->status,
				"statusCode" => $post_data->statusCode,
				"msg" => $post_data->msg,
				"data" => array(
					"payPageUrl" => $post_data->data->payPageUrl,
					"expiry" => 0,
					"amount" => $post_data->data->amount,
					"paygicReferenceId" => $post_data->data->paygicReferenceId,
					"merchantReferenceId" => $post_data->data->merchantReferenceId,
				)

			);

			$paygicdata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'entryfor' => 7,
				'userid' => $userid,
				'orderid' => $orderid,
				'orderamount' => $roundamount,
				'ordernote' => $productdata->productname,
			);

			$response = $this->Site_Payment_Gateway_Model->paygicentry($paygicdata);

			redirect($post_data->data->payPageUrl);
		}
	}

	public function festivalresponse($orderid, $token)
	{

		$this->load->model('Site_Digital_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$this->load->helper('paygic');

		$createresponse = checkPaymentStatus($orderid, $token);

		$response_data = json_decode($createresponse);

		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		$grandtotal = $netamount = $cgstamount = $sgstamount = $igstamount = 0;
		$decText = null;

		if (isset($response_data)) {

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

				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => $response]);
			} else {
				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
			}
		} else {
			$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => 'false']);
		}
	}
	/* END : Festival Offer loan */

	/* START : Star Offer loan */
	public function staroffer()
	{
		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
		$prores = $this->Site_Info_Model->getproductdetails('star-offer');
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

		$this->load->view('staroffer', ['meta' => $meta, 'productdata' => $productdata, 'roipackages' => $roipackages, 'banklist' => $banklist, 'testimoniallist' => $testimoniallist]);
	}

	public function getstaroffer()
	{

		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Digital_Model');
		$this->load->model('Site_Payment_Gateway_Model');

		$productdata = $this->Site_Info_Model->getproductdetails('star-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);
		$roundamount = floor($grandamount);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];


		$existingUser = $this->Site_Digital_Model->checkexistinguser($mobileno);

		// Check if mobile number exists
		if ($existingUser) {

			$message = "You are already a registered customer. Kindly login to customer panel. <a href='" . site_url('customer') . "'>Click here</a>";
			$this->session->set_flashdata('danger', $message);
			redirect('staroffer');
		} else {

			$uat_numbers = unserialize(UAT_MOBILE_NUMBERS);
			foreach ($uat_numbers as $uat_num) {
				if ($uat_num == $mobileno) {
					$roundamount = 1;
				}
			}

			$data = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'offerpage' => 8,
				'fullname' => $fullname,
				'mobile' => $mobileno,
				'emailid' => $emailid,
				'amount' => $roundamount,
				'isCustomer' => 0,
				'isActive' => 0,
				'isDelete' => 0
			);

			$userid = $this->Site_Digital_Model->cardofferorder($data);

			$orderid = 'TCMPGSHT3D'.number_format(microtime(true) * 1000, 0, '.', '');
			$encData = null;

			$returnUrl = base_url('pay/starresponse/');

			$terminalId = TERMINAL_ID;
			$password = TERMINAL_PASSWORD;
			$mkey = TERMINAL_KEY;

			// data sequence is - orderId|terminalId|password|merchantKey|amount|currency
			//$signdata = $orderid."|TER7990817|TER25041201011970543064|f5949cf7946afa557191b8a18504c2a847a6d9ff08c28ec2fd456322889d1451|".$roundamount."|INR";
			$signdata = $orderid."|".$terminalId."|".$password."|".$mkey."|".$roundamount."|INR";
			$signature = hash('sha256', $signdata);

			$postdata = array(
				"referenceId"=> $orderid,
				"terminalId"=> $terminalId,
				"password"=> $password,
				"signature"=>  $signature, //Generated signature
				"paymentType"=> "1",
				"amount"=> $roundamount,
				"currency"=> "INR",
				"order"=> array(
				"orderId"=> $orderid,  // Related orderId
				"description"=> "Ivrpayment Offer"
				),
				"customer"=> array(
					"customerEmail"=> $emailid,
					"billingAddressStreet"=> '',
					"billingAddressCity"=> "",
					"billingAddressState"=> "",
					"billingAddressPostalCode"=> "",
					"billingAddressCountry"=> "IN"
				),
				"additionalDetails"=> array(
					"userData"=> "{\"entryone\":\"abc\",\"entrytwo\":\"def\",\"entrythree\":\"xyz\",\"receiptUrl\":\"$returnUrl\"}"
				),
			);

			$vegahdata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'entryfor' => 8,
				'userid' => $userid,
				'orderid' => $orderid,
				'orderamount' => $roundamount,
				'ordernote' => $productdata->productname
			);
			$response_data= $this->Site_Payment_Gateway_Model->vegaahentry($vegahdata);


			// https://checkout.vegaah.com/vegaahpayments/v2/payments/pay-request
		   $curl = curl_init();
			curl_setopt_array($curl, [
			CURLOPT_URL => "https://checkout.vegaah.com/vegaahpayments/v2/payments/pay-request",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS =>  json_encode($postdata),
			CURLOPT_HTTPHEADER => [
				"Content-Type: application/json",
				"accept: application/json"
			],
			]);

			$response = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);

			$post_decode_data =  json_decode($response);

			$payment_url = $post_decode_data->paymentLink->linkUrl;
			$transaction_id = $post_decode_data->transactionId;

			$redirect_url = $payment_url.$transaction_id;

			redirect($redirect_url);
			die;

		}
	}

	public function starresponse()
	{

			$this->load->model('Site_Info_Model');
			$meta = $this->Site_Info_Model->getmetakeywords('offer-page');
			$jsonData = file_get_contents("php://input");
			parse_str($jsonData, $parsedData);
			unset($parsedData['termId']);

			$decodedData = urldecode($parsedData['data']);
			$decodedData = str_replace(' ', '+', $decodedData);

			$encryptedResponse = base64_decode($decodedData, true);
			
			$merKey = TERMINAL_KEY;
			$binaryKey = hex2bin($merKey);

			$decryptedData = openssl_decrypt($encryptedResponse, 'AES-256-ECB', $binaryKey, OPENSSL_RAW_DATA);

			if ($decryptedData === false) {
				$this->load->view('staroffer-response', ['meta' => $meta, 'status' => 'false']);
				return;
			}

			$resultdata = json_decode($decryptedData, true);
			/*if ($resultdata === null) {
				$this->load->view('staroffer-response', ['meta' => $meta, 'status' => 'false']);
				return;
			}*/

			$this->load->model('Site_Digital_Model');
			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getvegaahentry($resultdata['orderDetails']['orderId']);

			$vegaahdata = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'referenceid' => $resultdata['transactionId'],
				'txstatus' => $resultdata['result'],
				'paymentmode' => $resultdata['paymentInstrument']['paymentMethod']
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatevegaahentry($paymentdata->id, $vegaahdata);

			if ($resultdata['result'] == 'SUCCESS') {
				$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

				$cardno = random_code(16);
				$data = array(
					'rec_date' => date('Y-m-d H:i:s'),
					'card_number' => $cardno,
					'registration_date' => date('Y-m-d'),
					'expiry_date' => date('Y-m-d', strtotime('+6 months')),
					'paymentid' => $resultdata['transactionId'],
					'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('staroffer-response', ['meta' => $meta, 'status' => $response]);
			}  else if ($resultdata['result'] == 'FAILURE') {
				$this->load->view('staroffer-response', ['meta' => $meta, 'status' => 'false']);
			}
	}
	/* END : Festival Offer loan */
}
