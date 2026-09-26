<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends MY_Controller {
	
	function __construct(){
		parent::__construct();

		if($this->session->userdata('adminid') == FALSE) {
			redirect('login');
		}
		$this->role = $this->session->userdata('admintype');
	}
	
	public function index(){
		$this->load->model('Manage_Report_Model');
		$custlist = $this->Manage_Report_Model->getdashcustomerdata();
		$leadlist = $this->Manage_Report_Model->getdashleaddata();

		$custlist = array_reverse($custlist);
		$leadlist = array_reverse($leadlist);

		$ac_data = array();

		$currentDate = new DateTime();
		$dayOfMonth = (int) $currentDate->format('d');

		$ac_flag = 1; // Change 1 to hide messages and change 0 to show messages
		//$dayOfMonth = 12;

		if ($dayOfMonth >= 1 && $dayOfMonth <= 10 && $ac_flag == 0) {
			$ac_data = array(
				'ac_class' => "warning",
				'ac_title' => "Important Notice",
				'ac_msg' => "If the previous month’s AMC or Royalty payment is not paid by the 10th of this month, your website will be automatically suspended. If paid, kindly ignore.",
			);
		} else {
			$ac_data = array(
				'ac_class' => "",
				'ac_title' => "",
				'ac_msg' => "",
			);
		}

		$this->load->view('dashboard',['custlist'=>$custlist, 'leadlist'=>$leadlist, 'ac_data' => $ac_data,'userrole' => $this->role]);
	}

	public function loanstatistics(){
		$this->load->view('statistics-loanenquiry');
	}

	public function digitalstatistics(){
		$this->load->model('Manage_Report_Model');
		$statistics = $this->Manage_Report_Model->digitalloanstatistics();
		echo json_encode(array("success"=>true, "statistics"=>$statistics));
	}

	public function cardstatistics(){
		$this->load->view('statistics-subscriptionplan');
	}

	public function membercarddata(){
		$this->load->model('Manage_Report_Model');
		$statistics = $this->Manage_Report_Model->membercarddata();
		echo json_encode(array("success"=>true, "statistics"=>$statistics));
	}

	public function offerdata(){
		$this->load->model('Manage_Report_Model');
		$statistics = $this->Manage_Report_Model->offerdata();
		echo json_encode(array("success"=>true, "statistics"=>$statistics));
	}

	public function customerstatistics(){
		$this->load->view('statistics-customer');
	}

	public function customerdata(){
		$this->load->model('Manage_Report_Model');
		$statistics = $this->Manage_Report_Model->customerdata();
		echo json_encode(array("success"=>true, "statistics"=>$statistics));
	}

//	public function channelstatistics(){
//		$this->load->view('statistics-channel');
//	}
//
//	public function channeldata(){
//		$this->load->model('Manage_Report_Model');
//		$statistics = $this->Manage_Report_Model->channeldata();
//		echo json_encode(array("success"=>true, "statistics"=>$statistics));
//	}

	public function applicationstatistics(){
		$this->load->view('statistics-application');
	}
	
	public function applicationdata(){
		$this->load->model('Manage_Report_Model');
		$statistics = $this->Manage_Report_Model->applicationdata();
		echo json_encode(array("success"=>true, "statistics"=>$statistics));
	}

	public function processstatistics(){
		$this->load->view('statistics-processstep');
	}

	public function processstepdata(){
		$dt_to = date('Y-m-d', strtotime('-7 days'));
		$dt_from = date('Y-m-d');

		if (isset($_REQUEST['dt_to'])) {
			$dt_to = $_REQUEST['dt_to'];
		}

		if (isset($_REQUEST['dt_from'])) {
			$dt_from = $_REQUEST['dt_from'];
		}
		$this->load->model('Manage_Report_Model');
		$statistics = $this->Manage_Report_Model->processstepdata($dt_to, $dt_from);
		$this->load->view('statistics-processstep', ["success"=>true, "statistics"=>$statistics, 'dt_to' => $dt_to, 'dt_from' => $dt_from]);
	}

	public function remarketingstatistics()
	{
		$this->load->view('remarketing_user_statistics');
	}

	public function remarketingcrondata()
	{
		$crondays = array();
		$crondays[] = '0';
		$crondays[] = '1';

		$this->load->model('Manage_Report_Model');
		$statistics['digitalremarketing'] = $this->Manage_Report_Model->remarketing_cron_data($crondays);

		$whcrondays = array();
		$whcrondays[] = '0';
		$whcrondays[] = '1';
		$whcrondays[] = '2';
		$whcrondays[] = '5';
		$whcrondays[] = '7';
		$whcrondays[] = '11';

		$this->load->model('Manage_Report_Model');
		$statistics['whremarketing'] = $this->Manage_Report_Model->wh_remarketing_cron_data($whcrondays);

		$intcrondays = array();
		$intcrondays[] = '1';
		$intcrondays[] = '2';
		$intcrondays[] = '3';
		$intcrondays[] = '5';
		$intcrondays[] = '7';
		$intcrondays[] = '10';
		$intcrondays[] = '15';

		$this->load->model('Manage_Report_Model');
		$statistics['intremarketing'] = $this->Manage_Report_Model->int_remarketing_cron_data($intcrondays);

		echo json_encode(array("success" => true, "statistics" => $statistics));
		//$this->load->view('remarketing_user_statistics', ['statistics'=>$statistics]);
	}


	public function testemail(){
		$maildata = array(
			'fullname' => 'Bimal Patel',
			'mobile' => '9408881214',
			'email' => 'bimalverloop@gmail.com',
			'password' => '123456',
			'order_number' => '101',
			'order_date' => date('d-m-Y'),
			'order_amount' => '999.00'
		   );
   
		   $subject = "Welcome to Fintopcorporate";
		 
		   $this->load->model('Manage_General_Model');
		   $content = $this->Manage_General_Model->hremailtemplate($maildata); 
   
		   echo $content;
		   die;
	}

}
?>
