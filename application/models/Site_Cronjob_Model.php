<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Site_Cronjob_Model extends CI_Model
{
	/* START : Online loan customer marketing message */
	public function online_marketing_message($schedule_arr)
	{

		$schedule = $url = $smsmessage = $smsresponse = $wheredate = $dataset = '';

		$lastno = count($schedule_arr);
		$wheredate .= "(";
		for ($i = 0; $i < $lastno; $i++) {
			$schedule .= $schedule_arr[$i];
			$wheredate .= "CAST(r.update_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule_arr[$i] . " DAY)";
			if ($i < $lastno - 1) {
				$schedule .= ", ";
				$wheredate .= " OR ";
			}
		}
		$wheredate .= ") ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where('r.rec_date >=', '2025-12-03 00:00:00')
			->where('r.isDnd', 0)
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
			->order_by('r.id asc')
			->get()
			->result();

		if (count($userlist) > 0) {
			$this->load->model('Site_Info_Model');
			$smsmessage = $this->Site_Info_Model->getsmsmessage('pl-remarketing-sms');
			$smssendid = getSMSsenderid();

			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if ($row->loanamount != 0 && $row->income != 0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}
					$premessage = str_replace("<#cronamount>", $eligibilityamt, $smsmessage);

					$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>" . $row->mobile . "</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";
				}
			}

			$eligibilityamt = "5,00,000";
			$premessage = str_replace("<#cronamount>", $eligibilityamt, $smsmessage);

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>7046134946</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>6358988761</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9023987358</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9998806924</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9898950296</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9724157166</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>7359734759</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>8128858228</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$smsresponse = sendxmlSMSobb($dataset);

			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'Customer',
				'parentid' => 1,
				'cronname' => 'SMS Day - ' . $schedule,
				'msgcount' => count($userlist),
				'msgresponse' => $smsresponse
			);

			$this->db->insert('sms_log', $data1);
		}

		return true;
	}
	/* END : Online loan customer marketing message */


	/* START : Whatsapp marketing message */
	public function whatsapp_marketing_message($schedule_arr)
	{
		die;
		$schedule = $url = $response = $airesponse = $wheredate = $dataset = '';
		$cnt = 1;

		$this->load->model('Site_Info_Model');
		$wpcampaignname = $this->Site_Info_Model->getsmsmessage('wpcampaignmain');

		$lastno = count($schedule_arr);
		$wheredate .= "(";
		for ($i = 0; $i < $lastno; $i++) {
			$schedule .= $schedule_arr[$i];
			$wheredate .= "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule_arr[$i] . " DAY)";
			if ($i < $lastno - 1) {
				$schedule .= ", ";
				$wheredate .= " OR ";
			}
		}
		$wheredate .= ") ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where('r.rec_date >=', '2025-12-03 00:00:00')
			->where('r.isDnd', 0)
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
			->order_by('r.id asc')
			->get()
			->result();

		if (count($userlist) > 0) {
			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if ($row->loanamount != 0 && $row->income != 0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					$data1 = array(
						'apiKey' => AISENSY_KEY,
						'campaignName' => $wpcampaignname,
						'destination' => '+91' . $row->mobile,
						'media' => array(
							'url' => AISENSY_MARKETING_URL,
							'filename' => AISENSY_MARKETING_IMAGE
						),
						'userName' => $row->fullname,
						'templateParams' => array('$Name', '$EligibleAmount'),
						'tags' => array('Get Offer'),
						'attributes' => array(
							'EligibleAmount' => strval($eligibilityamt)
						)
					);
					$restrack1 = aisensy_track($data1);
					$airesponse .= $row->mobile . "-" . $restrack1 . "|";
					$cnt++;
				}
			}

			$adminlist = ['7046134946', '6358988761', '9023987358', '9998806924', '9898950296', '9724157166','7359734759', '8128858228'];
			$eligibilityamt = "5,00,000";

			foreach ($adminlist as $row2) {
				$data2 = array(
					'apiKey' => AISENSY_KEY,
					'campaignName' => $wpcampaignname,
					'destination' => '+91' . $row2,
					'media' => array(
						'url' => AISENSY_MARKETING_URL,
						'filename' => AISENSY_MARKETING_IMAGE
					),
					'userName' => '$Name',
					'templateParams' => array('$Name', '$EligibleAmount'),
					'tags' => array('Get Offer'),
					'attributes' => array(
						'EligibleAmount' => strval($eligibilityamt)
					)
				);
				$restrack2 = aisensy_track($data2);
				$airesponse .= $row2 . "-" . $restrack2 . "|";
				$cnt++;
			}


			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'Whatsapp Digital',
				'parentid' => 11,
				'cronname' => 'Whatsapp - ' . $schedule,
				'msgcount' => $cnt,
				'msgresponse' => $airesponse
			);

			$this->db->insert('sms_log', $data1);
		}

		return true;
	}
	/* END : Whatsapp marketing message */

	/* START : intrekt marketing message */
	public function intrekt_marketing_message_1($schedule = 9999) {
		$airesponse = "";
		$cnt = 1;
		
		$this->load->model('Site_Info_Model');
		$wpcampaignname = $this->Site_Info_Model->getsmsmessage('wpcampaignmain');

		$wheredate = "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where('r.rec_date >=', '2025-12-03 00:00:00')
			->where('r.isDnd', 0)
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
			->order_by('r.id asc')
			->get()
			->result();
			
		if(count($userlist) > 0) {

			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'whatsapp interakt new',
				'parentid' => 3,
				'cronname' => 'whatsapp interakt - ' . $schedule,
				'msgcount' => count($userlist)
			);
			$this->db->insert('sms_log', $data1);
		   	$logid = $this->db->insert_id();

			
			$adminlist = ['7046134946', '6358988761', '9023987358', '9998806924', '9898950296', '9724157166','7359734759', '8128858228'];
			$eligibilityamt = "5,00,000";

			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					$data4 = array(
						"fullPhoneNumber" => '+91'.$row->mobile,
						"callbackData"=> "some text here",
						"type"=> "Template",
						"template"=> array(
								"name"=> "22june_rm_1", //7sep_auto
								"languageCode"=> "en",
								"headerValues"=> array(
									"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/75624ae7-e762-46d1-b48d-7727a7a93a0c/message_template_sample/Iqh1symecHO8/cs%20in.jpg?se=2031-06-16T09%3A25%3A58Z&sp=rt&sv=2019-12-12&sr=b&sig=NwU3WHNgJ/n5ih6JLhMXAXDvdMXtVZSIg/ZUylypR9I%3D"
								),
								"bodyValues"=> array(
									$row->fullname, $eligibilityamt
								),
							)
					
					);
					$restrack4 = interakt_track($data4);
					$airesponse .= $row->mobile . "-" . $restrack4 . "|";
						$data2 = array(
							'msgcount' => $cnt,
							'msgresponse' => $airesponse
						);
					
					$query = $this->db->where('id', $logid)
						->update('sms_log', $data2);
					$cnt++;
				}
			}

			foreach($adminlist as $row2) {
				$data4 = array(
					"fullPhoneNumber" => '+91'.$row2,
					"callbackData"=> "some text here",
					"type"=> "Template",
					"template"=> array(
							"name"=> "22june_rm_1", //7sep_auto
							"languageCode"=> "en",
							"headerValues"=> array(
								"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/75624ae7-e762-46d1-b48d-7727a7a93a0c/message_template_sample/Iqh1symecHO8/cs%20in.jpg?se=2031-06-16T09%3A25%3A58Z&sp=rt&sv=2019-12-12&sr=b&sig=NwU3WHNgJ/n5ih6JLhMXAXDvdMXtVZSIg/ZUylypR9I%3D"
							),
							"bodyValues"=> array(
								'$name', $eligibilityamt
							),
						)
				
				);
				$restrack4 = interakt_track($data4);
				$airesponse .= $row2 . "-" . $restrack4 . "|";

				$data2 = array(
							'msgcount' => $cnt,
							'msgresponse' => $airesponse
						);
						
						$query = $this->db->where('id', $logid)
							->update('sms_log', $data2);
				$cnt++;
			}
		
		}

		return true;
	}
	/* END : Whatsapp marketing message */

	/* START : intrekt marketing message */
	public function intrekt_marketing_message($schedule = 9999) {
		$airesponse = "";
		$cnt = 1;
		
		$this->load->model('Site_Info_Model');
		$wpcampaignname = $this->Site_Info_Model->getsmsmessage('wpcampaignmain');

		$wheredate = "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where('r.rec_date >=', '2025-12-03 00:00:00')
			->where('r.isDnd', 0)
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
			->order_by('r.id asc')
			->get()
			->result();
			
		if(count($userlist) > 0) {

			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'whatsapp interakt',
				'parentid' => 2,
				'cronname' => 'whatsapp interakt - ' . $schedule,
				'msgcount' => count($userlist)
			);
			$this->db->insert('sms_log', $data1);
		   	$logid = $this->db->insert_id();

			
			$adminlist = ['7046134946', '6358988761', '9023987358', '9998806924', '9898950296', '9724157166','7359734759', '8128858228'];
			$eligibilityamt = "5,00,000";

			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					$data4 = array(
						"fullPhoneNumber" => '+91'.$row->mobile,
						"callbackData"=> "some text here",
						"type"=> "Template",
						"template"=> array(
								"name"=> "28april_rm_2", //7sep_auto
								"languageCode"=> "en",
								"headerValues"=> array(
									"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/13aab3c7-9173-47ed-bcd8-9789e99acaab/message_template_sample/lUUqCdYsFuv0/cs.jpg?se=2031-06-17T06%3A19%3A16Z&sp=rt&sv=2019-12-12&sr=b&sig=z%2BTDj1Au/PwVg7mb/CNlsUuLrWYwnxDYQHaVfqRVvIc%3D"
								),
								"bodyValues"=> array(
									$row->fullname, $eligibilityamt
								),
							)
					
					);
					$restrack4 = interakt_track_remarketing($data4);
					$airesponse .= $row->mobile . "-" . $restrack4 . "|";
						$data2 = array(
							'msgcount' => $cnt,
							'msgresponse' => $airesponse
						);
					
					$query = $this->db->where('id', $logid)
						->update('sms_log', $data2);
					$cnt++;
				}
			}

			foreach($adminlist as $row2) {
				$data4 = array(
					"fullPhoneNumber" => '+91'.$row2,
					"callbackData"=> "some text here",
					"type"=> "Template",
					"template"=> array(
							"name"=> "28april_rm_2", //7sep_auto
							"languageCode"=> "en",
							"headerValues"=> array(
								"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/13aab3c7-9173-47ed-bcd8-9789e99acaab/message_template_sample/lUUqCdYsFuv0/cs.jpg?se=2031-06-17T06%3A19%3A16Z&sp=rt&sv=2019-12-12&sr=b&sig=z%2BTDj1Au/PwVg7mb/CNlsUuLrWYwnxDYQHaVfqRVvIc%3D"
							),
							"bodyValues"=> array(
								'$name', $eligibilityamt
							),
						)
				
				);
				$restrack4 = interakt_track_remarketing($data4);
				$airesponse .= $row2 . "-" . $restrack4 . "|";

				$data2 = array(
							'msgcount' => $cnt,
							'msgresponse' => $airesponse
						);
						
						$query = $this->db->where('id', $logid)
							->update('sms_log', $data2);
				$cnt++;
			}
		
		}

		return true;
	}
	/* END : Whatsapp marketing message */

	/* START : Customer support message */
	public function customer_support_message()
	{

		$url = $smsmessage = $dataset = $smsresponse = '';

		$prev_date = date('Y-m-d', strtotime('-1 days'));
		$userlist = $this->db->select('id, update_date, fullname, mobile, email, cardtype')
			->where('update_date >=', $prev_date . ' 21:00:00')
			->where('isUser', 2)
			->where('isActive', 1)
			->where('isDelete', 0)
			->order_by('id asc')
			->get('user_registration')
			->result();

		if (count($userlist) > 0) {
			$smsmessage = "Dear Customer, your loan application is under process. Our Company Executive will connect soon. If you've any query, call us on 9157032453 Regards, Cashindia";
			$smssendid = getSMSsenderid();

			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>" . $row->mobile . "</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";
				}
			}

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9023987358</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>7046134946</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>8128858228</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$smsresponse = sendxmlSMSobb($dataset);

			$data1 = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'crontype' => 'Support',
				'parentid' => 1,
				'cronname' => 'Customer Support',
				'msgcount' => count($userlist),
				'msgresponse' => $smsresponse
			);

			$this->db->insert('sms_log', $data1);
		}


		return true;
	}
	/* END : Customer support message */

	/* START : Customer reapply eligible message */
	public function customer_reapplyeligible()
	{

		$wheredate = "CAST(a.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -90 DAY)";
		$wherestatus = "(a.status=2 or a.status=3)";

		$userlist = $this->db->select('r.id, a.rec_date, r.mobile, r.email')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
			->where($wherestatus)
			->where('r.isUser', 2)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('a.isDelete', 0)
			->group_by('r.mobile')
			->order_by('r.rec_date desc')
			->get()
			->result();

		if (count($userlist) > 0) {
			foreach ($userlist as $row) {
				$message = "The wait is over! You're now eligible to reapply for a loan. Login to your portal {#var#} Cashindia";

				$smsresponse = sendtextSMSobb($row->mobile, $message);
			}
		}

	}
	/* END : Customer reapply eligible message */

}

?>
