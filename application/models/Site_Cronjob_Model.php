<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Site_Cronjob_Model extends CI_Model
{
	/* START : Online loan customer marketing message */
	
	public function online_marketing_message($schedule_arr)
	{
		$schedule = $url = $smsmessage = $smsresponse = $wheredate = $dataset = '';

		$dynamicDate = getLockDateByDays();
		
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
			// ->where('r.rec_date >=', $dynamicDate)
			//->where('r.rec_date >=', '2025-11-02 00:00:00')
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
			$tempid = '1707175588089880456';

			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if ($row->loanamount != 0 && $row->income != 0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}
					$premessage = str_replace("<#cronamount>", $eligibilityamt, $smsmessage);

					//$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>" . $row->mobile . "</mobiles><message>" . $premessage . "</message><tempid>".$tempid."</tempid><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";
					$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>" . $row->mobile . "</mobiles><message>" . $premessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";
				}
			}

			$eligibilityamt = "5,00,000";
			$premessage = str_replace("<#cronamount>", $eligibilityamt, $smsmessage);
			
			
			$dataset .= "<sms><user>".SMS_OBB_USERNAME."</user><password>".SMS_OBB_API_KEY."</password><mobiles>8128858228</mobiles><message>".$premessage."</message><tempid>".$tempid."</tempid><accusage>1</accusage><senderid>".$smssendid."</senderid></sms>";

			$dataset .= "<sms><user>".SMS_OBB_USERNAME."</user><password>".SMS_OBB_API_KEY."</password><mobiles>9725165565</mobiles><message>".$premessage."</message><accusage>1</accusage><senderid>".$smssendid."</senderid></sms>";

			
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
		$schedule = $url = $response = $airesponse = $wheredate = $dataset = '';
		$cnt = 1;
		$dynamicDate = getLockDateByDays();

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
			// ->where('r.rec_date >=', $dynamicDate)
			//->where('r.rec_date >=', '2025-11-02 00:00:00')
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
			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
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
						'templateParams' => array('$Name','$EligibleAmount'),
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

			$adminlist = ['9725165565','8128858228'];
			$eligibilityamt = "5,00,000";

			foreach($adminlist as $row2) {
				$data2 = array(
					'apiKey' => AISENSY_KEY,
					'campaignName' => $wpcampaignname,
					'destination' => '+91' . $row2,
					'media' => array(
						'url' => AISENSY_MARKETING_URL,
						'filename' => AISENSY_MARKETING_IMAGE
					),
					'userName' => '$Name',
					'templateParams' => array('$Name','$EligibleAmount'),
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

	/* START : Whatsapp INTERAKT marketing message  interakt*/ 

	public function whatsapp_interakt_marketing_message($schedule) {

		$airesponse = "";
		$cnt = 1;
		$dynamicDate = getLockDateByDays();

		$wheredate = "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
		//	->where('r.rec_date >=', $dynamicDate)
			//->where('r.rec_date >=', '2025-11-02 00:00:00') 
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
		//	->group_by('r.mobile')
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
			$logid = $id = $this->db->insert_id();

			$adminlist = ['9725165565','8128858228','9725165565'];
			$eligibilityamt = "5,00,000";

			foreach($adminlist as $row2) {
				$data4 = array(
					"fullPhoneNumber" => '+91'.$row2,
					"callbackData"=> "some text here",
					"type"=> "Template",
					"template"=> array(
						"name"=> "30april_rm_2",
						"languageCode"=> "en",
						"headerValues"=> array(
							"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/3fe1d8a2-1fad-4d07-9715-4cc2dc86f1a0/message_template_sample/VLSfa2sXn1wK/fintop_rm.jpeg?se=2031-04-24T04%3A28%3A13Z&sp=rt&sv=2019-12-12&sr=b&sig=sPitSGlxGfO2VuozrPH7KkiMVBogb%2Bi%2BEJdppvjgoPU%3D"
						),
						"bodyValues"=> array(
							'$name', $eligibilityamt
						),
					)
				);
				$restrack5 = interakt_track($data4);
				$airesponse .= $row2 . "-" . $restrack5 . "|";
				$data2 = array(
					'msgcount' => $cnt,
					'msgresponse' => $airesponse
				   );
				   
				   $query = $this->db->where('id', $logid)
					   ->update('sms_log', $data2);
				$cnt++;
			}
			
			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					 // Whatsapp INTERAKT Code
						$data4 = array(
							"fullPhoneNumber" => '+91'.$row->mobile,
							"callbackData"=> "some text here",
							"type"=> "Template",
							"template"=> array(
								"name"=> "30april_rm_2",
								"languageCode"=> "en",
								"headerValues"=> array(
    								"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/3fe1d8a2-1fad-4d07-9715-4cc2dc86f1a0/message_template_sample/VLSfa2sXn1wK/fintop_rm.jpeg?se=2031-04-24T04%3A28%3A13Z&sp=rt&sv=2019-12-12&sr=b&sig=sPitSGlxGfO2VuozrPH7KkiMVBogb%2Bi%2BEJdppvjgoPU%3D"
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
		}
		return true;
	}

	public function whatsapp_interakt_marketing_message_rm($schedule) {

		$airesponse = "";
		$cnt = 1;
		$dynamicDate = getLockDateByDays();

		$wheredate = "CAST(r.rec_date as DATE) = DATE_ADD(CURDATE(),INTERVAL -" . $schedule . " DAY) ";

		$userlist = $this->db->select('r.id, r.rec_date, r.update_date, r.fullname, r.mobile, r.email, r.cardtype, a.income, a.currentemi, a.loanamount')
			->from('user_registration r')
			->join('user_application a', 'a.userid=r.id')
			->where($wheredate)
		//	->where('r.rec_date >=', $dynamicDate)
			//->where('r.rec_date >=', '2025-11-02 00:00:00') 
			->where('r.isUser', 1)
			->where('r.isActive', 1)
			->where('r.isDelete', 0)
			->where('r.cardtype', 11)
			->where('a.status', 1)
			->where('a.isDelete', 0)
		//	->group_by('r.mobile')
			->order_by('r.id asc')
			->get()
		    ->result();
			
		if(count($userlist) > 0) {
		    $data1 = array(
    			 'rec_date' => date('Y-m-d H:i:s'),
    			 'crontype' => 'whatsapp interakt rm',
    			 'parentid' => 3,
    			 'cronname' => 'whatsapp interakt rm - ' . $schedule,
    			 'msgcount' => count($userlist)
			);
			$this->db->insert('sms_log', $data1);
			$logid = $id = $this->db->insert_id();

			$adminlist = ['9725165565','8128858228'];
			$eligibilityamt = "5,00,000";

			foreach($adminlist as $row2) {
				$data4 = array(
					"fullPhoneNumber" => '+91'.$row2,
					"callbackData"=> "some text here",
					"type"=> "Template",
					"template"=> array(
						"name"=> "7may_rm_1",
						"languageCode"=> "en",
						"headerValues"=> array(
							"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/da466ac4-a9a6-4305-aae9-9ea1d3d8cf58/message_template_sample/JvACOcD4sx5J/fintop.jpeg?se=2031-05-01T05%3A08%3A29Z&sp=rt&sv=2019-12-12&sr=b&sig=ti8mK8OR/mTw7M5xaaeWa6hTJagYbMzMv7tL/fqyaUk%3D"
						),
						"bodyValues"=> array(
							'$name', $eligibilityamt
						),
					)
				);
				$restrack5 = interakt_track_rm($data4);
				$airesponse .= $row2 . "-" . $restrack5 . "|";
				$data2 = array(
					'msgcount' => $cnt,
					'msgresponse' => $airesponse
				   );
				   
				   $query = $this->db->where('id', $logid)
					   ->update('sms_log', $data2);
				$cnt++;
			}
			
			foreach($userlist as $row) {
				if($row->mobile != '') {
					$eligibilityamt = "5,00,000";

					if($row->loanamount!=0 && $row->income!=0) {
						$eligibilityamtsimple = calEligiblity($row->income, $row->currentemi, 11, $row->loanamount);
						$eligibilityamt = formatePriceIndia($eligibilityamtsimple, 0);
					}

					 // Whatsapp INTERAKT Code
						$data4 = array(
							"fullPhoneNumber" => '+91'.$row->mobile,
							"callbackData"=> "some text here",
							"type"=> "Template",
							"template"=> array(
								"name"=> "7may_rm_1",
								"languageCode"=> "en",
								"headerValues"=> array(
    								"https://interaktprodmediastorage.blob.core.windows.net/mediaprodstoragecontainer/da466ac4-a9a6-4305-aae9-9ea1d3d8cf58/message_template_sample/JvACOcD4sx5J/fintop.jpeg?se=2031-05-01T05%3A08%3A29Z&sp=rt&sv=2019-12-12&sr=b&sig=ti8mK8OR/mTw7M5xaaeWa6hTJagYbMzMv7tL/fqyaUk%3D"
    							),
								"bodyValues"=> array(
									$row->fullname, $eligibilityamt
								),
							)
						);
						$restrack4 = interakt_track_rm($data4);
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
		}
		return true;
	}
	/* END : Whatsapp INTERAKT marketing message */

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
			$smsmessage = "Dear Customer, your loan application is under process. Our Company Executive will connect soon. If you've any query, call us on 8155893017 Regards, Fintopcorporate";
			$smssendid = getSMSsenderid();

			foreach ($userlist as $row) {
				if ($row->mobile != '') {
					$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>" . $row->mobile . "</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";
				}
			}

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>7046134946</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";

			$dataset .= "<sms><user>" . SMS_OBB_USERNAME . "</user><password>" . SMS_OBB_API_KEY . "</password><mobiles>9662797996</mobiles><message>" . $smsmessage . "</message><accusage>1</accusage><senderid>" . $smssendid . "</senderid></sms>";


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
				$message = "Dear Customer, You're now eligible to reapply for a loan. Login to your portal https://bitly.ws/39LCM Fintopcorporate";
				$tempid = '1707173920009228496';
				//$smsresponse = sendtextSMSobb($row->mobile, $message, $tempid);
			}
		}

	}
	/* END : Customer reapply eligible message */

}

?>
