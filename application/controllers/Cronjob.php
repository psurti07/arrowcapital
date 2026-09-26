<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cronjob extends CI_Controller
{

	public function index()
	{
		return redirect()->to('Infopage');
	}

	/* Online loan customer marketing message */
	public function onlineremarketing()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();

		$cronjobs['a0'] = '0 16 * * *';
		$cronjobs['b0'] = '45 20 * * *';

		$cronjobs['a1'] = '15 10 * * *';
		$cronjobs['b1'] = '0 20 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$schedule_arr[] = $schedule;
			}
		}

		if (!empty($schedule_arr)) {
			$response = $this->Site_Cronjob_Model->online_marketing_message($schedule_arr);
		}
		die;
	}
	/* Online loan customer marketing message */

	/* Whatsapp marketing message */
	public function whatsappremarketing()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();

		$cronjobs['a0'] = '0 7 * * *';
		$cronjobs['b0'] = '0 22 * * *';

		$cronjobs['a1'] = '30 8 * * *';
		$cronjobs['b1'] = '0 18 * * *';

		$cronjobs['a2'] = '0 10 * * *';
		$cronjobs['b2'] = '0 20 * * *';

		$cronjobs['a5'] = '30 11 * * *';

		$cronjobs['a7'] = '0 13 * * *';
		$cronjobs['b7'] = '0 16 * * *';

		$cronjobs['a11'] = '30 14 * * *';
		$cronjobs['b11'] = '30 23 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$schedule_arr[] = $schedule;
			}
		}

		if (!empty($schedule_arr)) {
			$response = $this->Site_Cronjob_Model->whatsapp_marketing_message($schedule_arr);
		}
		die;
	}
	/* Whatsapp marketing message */

	/* Whatsapp interakt marketing message */
	public function whatsappremarketing_interakt()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();
		
		$cronjobs['a0'] = '30 9 * * *';
		$cronjobs['b0'] = '30 23 * * *';
		
		$cronjobs['a1'] = '0 9 * * *';

		$cronjobs['a2'] = '30 11 * * *';
		$cronjobs['b2'] = '30 22 * * *';

		$cronjobs['a3'] = '30 12 * * *';
		$cronjobs['b3'] = '30 21 * * *';

		$cronjobs['a4'] = '30 20 * * *';

		$cronjobs['a6'] = '30 13 * * *';

		$cronjobs['a8'] = '30 19 * * *';

		$cronjobs['a9'] = '30 14 * * *';

		$cronjobs['a10'] = '0 18 * * *';

		$cronjobs['a12'] = '30 15 * * *';

		$cronjobs['a13'] = '0 17 * * *';
		
		$cronjobs['a15'] = '30 16 * * *';

		$cronjobs['a16'] = '0 16 * * *';

		$cronjobs['a17'] = '30 10 * * *';

		$cronjobs['a20'] = '0 15 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->whatsapp_interakt_marketing_message($schedule);
			}
		}
		die;
	}
	/* Whatsapp interakt marketing message */

	/* Whatsapp interakt marketing message */
	public function whatsappremarketing_interakt_rm()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();
		
		$cronjobs['a0'] = '0 7 * * *';
		$cronjobs['b0'] = '0 22 * * *';
		
		$cronjobs['a1'] = '30 8 * * *';
		$cronjobs['b1'] = '30 17 * * *';

		$cronjobs['a2'] = '0 10 * * *';
		$cronjobs['b2'] = '0 19 * * *';

		$cronjobs['a5'] = '30 11 * * *';
		$cronjobs['b5'] = '30 20 * * *';

		$cronjobs['a10'] = '0 13 * * *';
		$cronjobs['b10'] = '0 16 * * *';
		
		$cronjobs['a15'] = '30 14 * * *';
		$cronjobs['b15'] = '30 23 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->whatsapp_interakt_marketing_message_rm($schedule);
			}
		}
		die;
	}
	/* Whatsapp interakt marketing message */

	/* Customer support message */
	public function customersupportmsg()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = '9999';

		$cronjobs = array();
		$cronjobs[] = "0 10 * * *";
		$cronjobs[] = "0 14 * * *";
		$cronjobs[] = "0 18 * * *";

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$response = $this->Site_Cronjob_Model->customer_support_message();
			}
		}

		die;
	}
	/* Customer support message */

	/* Customer reapply eligible message */
	public function customerreapply()
	{
		$this->load->model('Site_Cronjob_Model');
		$response = $this->Site_Cronjob_Model->customer_reapplyeligible();
		die;
	}
	/* Customer reapply eligible message */

}
?>
