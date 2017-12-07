

<?php


	
	include_once 'Mail_standard.php';
	
	
	
	
	Validation::determine_data_form();
	
	
	class Validation{
		
		
		public static function determine_data_form(){
			
			$data_f = self::data_form();
			
			if(gettype($data_f) == 'array'):
			
		
					Mail_User::send_mail_to_user($data_f);
					
			else:
			
				echo $data_f;
			
			endif;
				
				
			
			
			
		}// End of validation class's public function
		
		
		private static function data_form(){
			
			
			$data_form = array();
			
			if(isset($_POST['v_super_pay'])){
				
				$data_form['vehicle_type'] = $_POST['v_type'];
				$data_form['service_package'] = $_POST['s_package'];
				$data_form['service_type'] = $_POST['service_type'];
				$data_form['car_re'] = $_POST['car_reg'];
				
				
				
				
				if(isset( $_POST['extras'])){
					
					$data_form['extra'] = $_POST['extras'];
					
					
				}
				
				
					$v_price = 0;
					$s_price = 0;
					$s_pack_price = 0;
					$ex_s_price = 0;
				
				
			if($data_form['vehicle_type'] == 'sedan'){
				
				$v_price = 150;
				$data_form['v_price'] = $v_price;
				
			
				
			}else if($data_form['vehicle_type'] == 'hatchback'){
				
				$v_price = 175;
				$data_form['v_price'] = $v_price;
				
			}else if($data_form['vehicle_type'] == 'suv'){
				
				$v_price = 190;
				$data_form['v_price'] = $v_price;
				
			}else if($data_form['vehicle_type'] == 'minibus'){
				
				$v_price = 250;
				$data_form['v_price'] = $v_price;
			}else if($data_form['vehicle_type'] == 'truck'){
				
				$v_price = 260;
				$data_form['v_price'] = $v_price;
			}else if($data_form['vehicle_type'] == 'motorbike'){
				
				$v_price = 130;
				$data_form['v_price'] = $v_price;
				
				
			}// End of first if group
				
				if($data_form['service_package'] == 'standard'){
					
					$s_pack_price = 280;
					$data_form['s_pack'] = $s_pack_price;
					
					
				}else{
					
					$s_pack_price = 320;
					$data_form['s_pack'] = $s_pack_price;
					
					
					
				}// End of second if group
				
				
				
				
				if($data_form['service_type'] == 'ineterio'){
					
					
					$s_price = 30;
					$data_form['s_type'] = $s_price;
					
					
					
				}else if($data_form['service_type'] == 'exterior'){
					
					$s_price = 40;
					$data_form['s_type'] = $s_price;
					
					
					
				}else{
					
					
					$s_price = 65;
					$data_form['s_type'] = $s_price;
					
					
				}// End of third if group
				
				
				if(isset($data_form['extra'])){
					
					
					$ex_s_price = 200;
					$data_form['extra_price'] = $ex_s_price;
					
					
					
				}
				
				
				
					$total = $v_price + $s_price + $s_pack_price+$ex_s_price;
					
					$data_form['total'] = $total;
					echo json_encode(($data_form));exit;
					
					
			
			}else if(isset($_POST['info_request'])){
				
				$data_form['user_name'] = $_POST['client_cname'];
				$data_form['user_email'] = $_POST['client_cmail'];
				$data_form['user_tel'] = $_POST['client_cmobile'];
				$data_form['user_subject'] = $_POST['client_csubject'];
				$data_form['user_message'] = $_POST['client_cmessage'];
				$data_form['information_data'] = true;
				
				return $data_form;
					
				
			}else if(isset($_POST['quote_request'])){
				
				
				$data_form['client_qname'] = $_POST['quote_client_name'];
				$data_form['client_qsname'] = $_POST['quote_client_sname'];
				$data_form['user_email'] = $_POST['quote_client_mail'];
				$data_form['client_qtel'] = $_POST['quote_client_mobile'];
				$data_form['sub_date'] = date('Y-m-d');
				$data_form['sub_type'] = $_POST['subscription_type'];
				$data_form['sub_fee'] = $_POST['quote_client_fee'];
				$data_form['account_hold'] = $_POST['quote_client_c_name'];
				$data_form['account_num'] = $_POST['quote_client_c_number'];
				$data_form['account_cvv'] = $_POST['quote_client_c_vv'];
				$data_form['database_save'] = true;
				
				
				
				return $data_form;
				
		}else {
			
			
				unset($data_form);
				return $data_form ='No form has been submitted';
			
			
	}// End of outer if else statement
			
			
			
			
			
		}// End of validated data form
		
		
	}// End of validation class
	
		


?>
