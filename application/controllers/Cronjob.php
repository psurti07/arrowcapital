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
		$cronjobs['a0'] = '30 20 * * *';
		
		$cronjobs['a1'] = '30 10 * * *';
		
		$cronjobs['a2'] = '0 17 * * *';

		$cronjobs['a4'] = '30 12 * * *';


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
		$cronjobs['a0'] = '30 11 * * *';

		$cronjobs['a1'] = '0 19 * * *';

		$cronjobs['a2'] = '30 12 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$schedule_arr[] = $schedule;
			}
		}

		if (!empty($schedule_arr)) {
			//$response = $this->Site_Cronjob_Model->whatsapp_marketing_message($schedule_arr);
		}
		die;
	}
	/* Whatsapp marketing message */

	/* Whatsapp intrekt marketing message */
	public function whatsapp_intrekt_remarketing_1()
	{
		die;
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();

		$cronjobs['a1'] = '0 8 * * *';

		$cronjobs['a2'] = '30 10 * * *';

		$cronjobs['a4'] = '0 19 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->intrekt_marketing_message_1($schedule);
			}
		}
		die;
	}

	/* Whatsapp intrekt marketing message */
	public function whatsapp_intrekt_remarketing()
	{
		$this->load->model('Site_Cronjob_Model');
		$schedule = 'z9999';
		$schedule_arr = array();

		$cronjobs = array();

		$cronjobs['a1'] = '30 9 * * *';
		$cronjobs['b1'] = '0 22 * * *';

		$cronjobs['a2'] = '0 11 * * *';
		$cronjobs['b2'] = '0 18 * * *';

		$cronjobs['a4'] = '0 12 * * *';
		$cronjobs['b4'] = '30 19 * * *';

		$cronjobs['a6'] = '30 13 * * *';

		$cronjobs['a10'] = '30 15 * * *';

		$cronjobs['a15'] = '0 21 * * *';

		foreach ($cronjobs as $method => $cron) {
			$time = time();
			if (is_time_cron($time, $cron)) {
				$schedule = substr($method, 1);
				$response = $this->Site_Cronjob_Model->intrekt_marketing_message($schedule);
			}
		}
		die;
	}
	/* Whatsapp marketing message */

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
