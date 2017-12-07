<?php session_start();

	
		function process_reg_data($data_repo){
			
			
			
			if(isset($_POST['user_reg_data'])){
				
				$validation_response = validate_reg_data();
				
				if(gettype($validation_response) != 'array'){
					
					echo 'The data is not valid';exit;
					
				}elseif(gettype($validation_response) === 'array'){
					
					$data_n_source = array();
					$data_n_source['database'] = $data_repo;
					$data_n_source['data'] = $validation_response;
					save_user_data($data_n_source);
					
				}
				
				
			}// End of registration data check if statement
		
		}// End of process user registration data function
		
		function validate_reg_data(){
			
			
			$user_data = array();
			$check_result = false;
			
			if(isset($_POST['user_r_mail']) && !empty($_POST['user_r_mail'])){
				
				
				$user_data['user_email'] = $_POST['user_r_mail'];
				
				if(isset($_POST['user_r_pass']) && !empty($_POST['user_r_pass'])):
					
					
					$user_data['user_password'] = $_POST['user_r_pass'];
					
					if(isset($_POST['user_r_fname']) && !empty($_POST['user_r_fname'])){
						
						$user_data['user_name'] = $_POST['user_r_fname'];
						
						if(isset($_POST['user_r_lname']) && !empty($_POST['user_r_lname'])){
						
							$user_data['user_last_name'] = $_POST['user_r_lname'];
							
							if(isset($_POST['province']) && !empty($_POST['province'])){
								
								$user_data['user_province'] = $_POST['province'];
								
								
								if(isset($_POST['user_r_sub']) && !empty($_POST['user_r_sub'])){
									
									$user_data['user_subscription'] = $_POST['user_r_sub'];
									
								}
								
								return $user_data;exit;
								
							}else{
								
								return $check_result;exit;
								
							}// End of innermost if else statement[user province]
						
						}else{
						
							return $check_result;exit;
						
						}// End of innermost if else statment[user last name]
							
							
						
					}else{
					
						return $check_result;exit;	
						
					}// End of third layer if else statement[user first name]
					
					
					else:
				
					return $check_result;exit;
				
				endif;// End of second layer if else statement[user password]
				
				
				
			}else{
				
				return $check_result;exit;
				
			}// End of first layer if statement[user email]
			
			
		}// End of validate registration data function
		
		
		
		
		function save_user_data($data_N_source){
			
			$data = $data_N_source['data'];
			$source = $data_N_source['database'];
			
			$manipulation_response = $source->manipulate_user_registration($data);
			
			if(gettype($manipulation_response) == 'array'){
				
				
				$_SESSION['log_status'] = true;
				$_SESSION['user_log_name'] = $manipulation_response['registered_u_name'];
				$_SESSION['user_log_lname'] = $manipulation_response['registered_u_lname'];
				$_SESSION['user_log_mail'] = $manipulation_response['registered_u_mail'];
				$_SESSION['user_log_pass'] = $manipulation_response['registered_u_pass'];
				
				
				$login_process = array();
				
				$login_process['login_status'] = true;
				$login_process['login_url'] = 'http://localhost/Turtrozz/webApzz/cafeT/public/registered/customer';
				$login_process['login_user_name'] = $manipulation_response['registered_u_name'];
				
				echo json_encode($login_process);exit;
				
				
			
				
			}else{
				
			
				$failed_sign_up = array();
				
				$failed_sign_up['user_msg'] = $manipulation_response;
				$failed_sign_up['user_reg_status'] = "failed";
				
				
				echo json_encode($failed_sign_up);exit;
				
			}
			
			
			
			
		}// End of save user data function


?>