<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Site_Payment_Gateway_Model extends CI_Model {

	public function cashfreeentry($data){
		$this->db->insert('cashfree_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getcashfreeentry($orderid){
		$query = $this->db->where('orderid', $orderid)
				->get('cashfree_entry')
				->row();
		return $query; 
	}

	public function updatecashfreeentry($id, $data){
		$query = $this->db->where('id', $id)
					->update('cashfree_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function zaakpayentry($data){
		$this->db->insert('zaakpay_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getzaakpayentry($orderid){
		$query = $this->db->where('orderid', $orderid)
				->get('zaakpay_entry')
				->row();
		return $query; 
	}

	public function updatezaakpayentry($id, $data){
		$query=$this->db->where('id', $id)
					->update('zaakpay_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function paygentry($data){
		$this->db->insert('payg_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getpaygentry($uid){
		$query = $this->db->where('uniqueid', $uid)
				->get('payg_entry')
				->row();
		return $query; 
	}

	public function updatepaygentry($id, $data){
		$query = $this->db->where('id', $id)
					->update('payg_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function paytmentry($data){
		$this->db->insert('paytm_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getpaytmentry($id){
		$query = $this->db->where('orderid', $id)
				->get('paytm_entry')
				->row();
		return $query; 
	}

	public function updatepaytmentry($id, $data){
		$sql_query=$this->db->where('id', $id)
					->update('paytm_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function subpaisaentry($data){
		$this->db->insert('subpaisa_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getsubpaisaentry($id){
		$query = $this->db->where('orderid', $id)
				->get('subpaisa_entry')
				->row();
		return $query; 
	}

	public function updatesubpaisaentry($id, $data){
		$sql_query=$this->db->where('id', $id)
					->update('subpaisa_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function phonepeentry($data){
		$this->db->insert('phonepe_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getphonepeentry($id){
		$query = $this->db->where('orderid', $id)
				->get('phonepe_entry')
				->row();
		return $query; 
	}

	public function updatephonepeentry($id, $data){
		$sql_query=$this->db->where('id', $id)
					->update('phonepe_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function worldlineentry($data){
		$this->db->insert('worldline_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getworldlineentry($id){
		$query = $this->db->where('orderid', $id)
				->get('worldline_entry')
				->row();
		return $query; 
	}

	public function updateworldlineentry($id, $data){
		$sql_query=$this->db->where('id', $id)
					->update('worldline_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}


	public function razorpayentry($data) {
		$this->db->insert('razorpay_entry', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getrazorpayentry($id) {
		$query = $this->db->where('orderid', $id)
		  ->get('razorpay_entry')
		  ->row();
		return $query;
	}

	public function updaterazorpayentry($id, $data) {
		$sql_query = $this->db->where('id', $id)
		   ->update('razorpay_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function airpayentry($data) {
		$this->db->insert('airpay_entry', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getairpayentry($orderid) {
		$query = $this->db->where('orderid', $orderid)
		 ->get('airpay_entry')
		 ->row();
		return $query;
	}

	public function updateairpayentry($id, $data) {
		$query = $this->db->where('id', $id)
		 ->update('airpay_entry', $data);
		return ($this->db->affected_rows() != 1) ? 'false' : 'true';
	}
	
	public function payuentry($data){
		$this->db->insert('payu_entry',$data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getpayuentry($id){
		$query = $this->db->where('orderid', $id)
				->get('payu_entry');
		return $query->row(); 
	}

	public function updatepayuentry($id, $data){
		$sql_query=$this->db->where('id', $id)
					->update('payu_entry', $data); 
		return ($this->db->affected_rows() != 1) ? 'false' : 'true';
	}
	public function paygicentry($data) {
		$this->db->insert('paygic_entry', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getpaygicentry($orderid) {
		$query = $this->db->where('orderid', $orderid)
		 ->get('paygic_entry')
		 ->row();
		return $query;
	}

	public function updatepaygicentry($id, $data) {
		$query = $this->db->where('id', $id)
		 ->update('paygic_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

	public function vegaahentry($data) {
		$this->db->insert('vegaah_entry', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getvegaahentry($orderid) {
		$query = $this->db->where('orderid', $orderid)
		 ->get('vegaah_entry')
		 ->row();
		return $query;
	}

	public function updatevegaahentry($id, $data) {
		$query = $this->db->where('id', $id)
		 ->update('vegaah_entry', $data);
		$flag = ($this->db->affected_rows() != 1) ? 'false' : 'true';
		return $flag;
	}

}
?>