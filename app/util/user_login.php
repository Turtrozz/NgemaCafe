<?php session_start();

	
		function log_user_in($data_repo){
			
			
			
			if(isset($_POST['user_log_data'])){
				
				
				$log_mail = $_POST['user_log_mail'];
				$log_pass = $_POST['user_log_pass'];
				
				$log_data = array();
				$log_data['log_mail'] = $log_mail;
				$log_data['log_pass'] = $log_pass;
				
				
				
				$data_n_source = array();
				$data_n_source['database'] = $data_repo;
				$data_n_source['data'] = $log_data;
				
				
				log_registered_user($data_n_source);
				
			}else{
				
				
				$log_mail = $_POST['user_log_name'];
				$log_pass = $_POST['user_log_pass'];
				
				$log_data = array();
				$log_data['log_mail'] = $log_mail;
				$log_data['log_pass'] = $log_pass;
				
				
				
				$data_n_source = array();
				$data_n_source['database'] = $data_repo;
				$data_n_source['data'] = $log_data;
				
				
				log_registered_user($data_n_source);
				
				
			}// End of registration data check if statement
		
		}// End of process user registration data function
		
		
		
		function log_registered_user($data_N_source){
			
			$data = $data_N_source['data'];
			$source = $data_N_source['database'];
			
			$manipulation_response = $source->log_shop_user($data);
			
			
			if(gettype($manipulation_response) == 'array'){
				
				
				$_SESSION['log_status'] = true;
				$_SESSION['user_log_name'] = $manipulation_response['firstName'];
				$_SESSION['user_log_lname'] = $manipulation_response['lastName'];
				$_SESSION['user_log_mail'] = $manipulation_response['emailAddress'];
				$_SESSION['user_log_pass'] = $manipulation_response['password'];
				
				
				$login_process = array();
				
				$login_process['login_status'] = true;
				$login_process['login_url'] = 'http://localhost/Turtrozz/webApzz/cafeT/public/registered/customer';
				$login_process['login_user_name'] = $manipulation_response['firstName'];
				
				echo json_encode($login_process);exit;
				
			}else{
				
				
				$failed_sign_up = array();
				
				$failed_sign_up['user_msg'] = 'You must register to log in';
				$failed_sign_up['user_reg_status'] = "failed";
				
				
				echo json_encode($failed_sign_up);exit;
				
				
				
			}
			
			
		}
		
		
		
?>