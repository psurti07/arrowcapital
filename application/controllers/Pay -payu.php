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
		$productdata = $this->Site_Info_Model->getproductdetails('card-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);
		$roundamount = floor($grandamount);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

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

		$returnUrl = base_url('pay/iverresponse');
		$callbackUrl = base_url('pay/ivercallback');

		if (PHONEPE_MODE == "PROD") {
			$curlurl = 'https://api.phonepe.com/apis/hermes/pg/v1/pay';
		} else {
			$curlurl = 'https://api-preprod.phonepe.com/apis/hermes/pg/v1/pay';
		}

		$this->load->helper('phonepe');
		$token_data = create_token();

		print_r($token_data);die;

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
			"merchantId" => PHONEPE_MID,
			"merchantTransactionId" => strval($orderid),
			"merchantUserId" => strval($userid),
			"amount" => $grandamount * 100,
			"redirectUrl" => $returnUrl,
			"redirectMode" => "POST",
			"callbackUrl" => $callbackUrl,
			"mobileNumber" => strval($mobileno),
			"paymentInstrument" => array(
				"type" => "PAY_PAGE"
			)
		);

		$this->load->helper('phonepe');
		$payurl = getpaymenturl($curlurl, PHONEPE_KEY, PHONEPE_KEY_INDEX, $data_res);
		print_r($payurl);die;
		if ($payurl) {
			if ($payurl->data->instrumentResponse->redirectInfo->url) {
				header("location:" . $payurl->data->instrumentResponse->redirectInfo->url);
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
	public function iverresponse()
	{

		$this->load->model('Site_Info_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (!isset($_POST["code"]) || !isset($_POST["transactionId"]) || !isset($_POST["providerReferenceId"])) {
			return redirect("cardoffer");
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
		
		$this->load->model('Site_Info_Model');
		$productdata = $this->Site_Info_Model->getproductdetails('mega-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

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

		$this->load->model('Site_Digital_Model');
		$userid = $this->Site_Digital_Model->cardofferorder($data);

		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$udf1 = $udf2 = $udf3 = $udf4 = $udf5 = '';
		$postData = array();

		$hashstring = PAYU_MERCHANT_KEY . '|' . $txnid . '|' . $grandamount . '|' . $productdata->productname . '|' . $fullname . '|' . $emailid . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . PAYU_SALT;

		$hash = hash('sha512', $hashstring);

		$returnUrl = base_url('pay/megaresponse');

		if (PAYU_MODE == "PROD") {
			$url = 'https://secure.payu.in/_payment';
		} else {
			$url = 'https://test.payu.in/_payment';
		}

		$postData = array(
		 'mkey' => PAYU_MERCHANT_KEY,
		 'tid' => $txnid,
		 'hash' => $hash,
		 'amount' => $grandamount,
		 'name' => $fullname,
		 'productinfo' => $productdata->productname,
		 'mailid' => $emailid,
		 'phoneno' => $mobileno,
		 'address' => '',
		 'action' => $url,
		 'returnUrl' => $returnUrl
		);

		$payudata = array(
		 'rec_date' => date('Y-m-d H:i:s'),
		 'entryfor' => 6,
		 'userid' => $userid,
		 'orderid' => $txnid,
		 'orderamount' => $grandamount,
		 'ordernote' => $productdata->productname
		);

		$this->load->model('Site_Payment_Gateway_Model');
		$payuentry = $this->Site_Payment_Gateway_Model->payuentry($payudata);

		$this->load->view('payu-checkout', ['postData' => $postData]);
	}

	public function megaresponse()
	{
		
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Digital_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (isset($_POST["status"]) && $_POST["status"] != "") {
			$status = (isset($_POST["status"])) ? $_POST["status"] : '';
			$firstname = (isset($_POST["firstname"])) ? $_POST["firstname"] : '';
			$amount = (isset($_POST["amount"])) ? $_POST["amount"] : '';
			$txnid = (isset($_POST["txnid"])) ? $_POST["txnid"] : '';
			$hash = (isset($_POST["hash"])) ? $_POST["hash"] : '';
			$key = (isset($_POST["key"])) ? $_POST["key"] : '';
			$productinfo = (isset($_POST["productinfo"])) ? $_POST["productinfo"] : '';
			$email = (isset($_POST["email"])) ? $_POST["email"] : '';
			$additionalCharges = (isset($_POST["additionalCharges"])) ? $_POST["additionalCharges"] : '';
			$mihpayid = (isset($_POST["mihpayid"])) ? $_POST["mihpayid"] : '';
			$pgtype = (isset($_POST["PG_TYPE"])) ? $_POST["PG_TYPE"] : '';
			$salt = PAYU_SALT;

			if ($additionalCharges != '') {
				$retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
			} else {
				$retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
			}

			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getpayuentry($txnid);

			$payudata = array(
			 'rec_date' => date('Y-m-d H:i:s'),
			 'referenceid' => $mihpayid,
			 'txstatus' => $status,
			 'paymentmode' => $pgtype
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatepayuentry($paymentdata->id, $payudata);
			$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

			if ($status == 'success') {
				$cardno = random_code(16);
				$data = array(
				 'rec_date' => date('Y-m-d H:i:s'),
				 'card_number' => $cardno,
				 'registration_date' => date('Y-m-d'),
				 'expiry_date' => date('Y-m-d', strtotime('+6 months')),
				 'amount' => $amount,
				 'paymentid' => $mihpayid,
				 'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('megaoffer-response', ['meta' => $meta, 'status' => $response]);
			} else if ($status == 'failure') {
				$sent = $this->Site_Digital_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
				$this->load->view('megaoffer-response', ['meta' => $meta, 'status' => 'false']);
			} else {
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
		$productdata = $this->Site_Info_Model->getproductdetails('festival-offer');
		$amount = ($productdata->inOffer == 1) ? $productdata->offeramount : $productdata->amount;
		$grandamount = $amount + ($amount * 0.18);

		$fullname = $_REQUEST['fullname'];
		$mobileno = $_REQUEST['mobileno'];
		$emailid = $_REQUEST['emailid'];

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

		$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$udf1 = $udf2 = $udf3 = $udf4 = $udf5 = '';
		$postData = array();

		$hashstring = PAYU_MERCHANT_KEY . '|' . $txnid . '|' . $grandamount . '|' . $productdata->productname . '|' . $fullname . '|' . $emailid . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . PAYU_SALT;

		$hash = hash('sha512', $hashstring);

		$returnUrl = base_url('pay/festivalresponse');

		if (PAYU_MODE == "PROD") {
			$url = 'https://secure.payu.in/_payment';
		} else {
			$url = 'https://test.payu.in/_payment';
		}

		$postData = array(
		 'mkey' => PAYU_MERCHANT_KEY,
		 'tid' => $txnid,
		 'hash' => $hash,
		 'amount' => $grandamount,
		 'name' => $fullname,
		 'productinfo' => $productdata->productname,
		 'mailid' => $emailid,
		 'phoneno' => $mobileno,
		 'address' => '',
		 'action' => $url,
		 'returnUrl' => $returnUrl
		);

		$payudata = array(
		 'rec_date' => date('Y-m-d H:i:s'),
		 'entryfor' => 7,
		 'userid' => $userid,
		 'orderid' => $txnid,
		 'orderamount' => $grandamount,
		 'ordernote' => $productdata->productname
		);

		$this->load->model('Site_Payment_Gateway_Model');
		$payuentry = $this->Site_Payment_Gateway_Model->payuentry($payudata);

		$this->load->view('payu-checkout', ['postData' => $postData]);
	}

	public function festivalresponse()
	{
		
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Digital_Model');
		$meta = $this->Site_Info_Model->getmetakeywords('offer-page');

		if (isset($_POST["status"]) && $_POST["status"] != "") {
			$status = (isset($_POST["status"])) ? $_POST["status"] : '';
			$firstname = (isset($_POST["firstname"])) ? $_POST["firstname"] : '';
			$amount = (isset($_POST["amount"])) ? $_POST["amount"] : '';
			$txnid = (isset($_POST["txnid"])) ? $_POST["txnid"] : '';
			$hash = (isset($_POST["hash"])) ? $_POST["hash"] : '';
			$key = (isset($_POST["key"])) ? $_POST["key"] : '';
			$productinfo = (isset($_POST["productinfo"])) ? $_POST["productinfo"] : '';
			$email = (isset($_POST["email"])) ? $_POST["email"] : '';
			$additionalCharges = (isset($_POST["additionalCharges"])) ? $_POST["additionalCharges"] : '';
			$mihpayid = (isset($_POST["mihpayid"])) ? $_POST["mihpayid"] : '';
			$pgtype = (isset($_POST["PG_TYPE"])) ? $_POST["PG_TYPE"] : '';
			$salt = PAYU_SALT;

			if ($additionalCharges != '') {
				$retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
			} else {
				$retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
			}

			$this->load->model('Site_Payment_Gateway_Model');
			$paymentdata = $this->Site_Payment_Gateway_Model->getpayuentry($txnid);

			$payudata = array(
			 'rec_date' => date('Y-m-d H:i:s'),
			 'referenceid' => $mihpayid,
			 'txstatus' => $status,
			 'paymentmode' => $pgtype
			);

			$response1 = $this->Site_Payment_Gateway_Model->updatepayuentry($paymentdata->id, $payudata);
			$userdata = $this->Site_Digital_Model->checkcardofferdata($paymentdata->userid);

			if ($status == 'success') {
				$cardno = random_code(16);
				$data = array(
				 'rec_date' => date('Y-m-d H:i:s'),
				 'card_number' => $cardno,
				 'registration_date' => date('Y-m-d'),
				 'expiry_date' => date('Y-m-d', strtotime('+6 months')),
				 'amount' => $amount,
				 'paymentid' => $mihpayid,
				 'isActive' => 1
				);

				$response = $this->Site_Digital_Model->updatecardofferorder($paymentdata->userid, $data);

				$sent = $this->Site_Digital_Model->sendPaymentGreetings($userdata->fullname, $userdata->mobile, $userdata->emailid);

				$this->load->view('festivaloffer-response', ['meta' => $meta, 'status' => $response]);
			} else if ($status == 'failure') {
				$sent = $this->Site_Digital_Model->sendPaymentFailedGreetings($userdata->mobile, $userdata->emailid);
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
