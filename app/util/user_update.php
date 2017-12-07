<?php session_start();



	function process_up_data($data_object){
		
		
			if(isset($_POST['user_about_up_f'])){
				
				
				
				
				
				$about_u_mail = htmlentities($_POST['user_about_up_mail'],ENT_QUOTES);
				$about_up_text = htmlentities(nl2br($_POST['about_user'],true),ENT_NOQUOTES);
				
				$up_data = array();
				$up_data['u_update_mail'] = $about_u_mail;
				$up_data['u_update_text'] = $about_up_text;
				$up_data['up_operation'] = 'user options';
				
				$data_N_Source = array();
				$data_N_Source['data_object'] = $data_object;
				$data_N_Source['data'] = $up_data;
				
				
				save_user_up_data($data_N_Source);
				
				
			}elseif(isset($_POST['user_personal_up_f'])){
				
				
				
				$personal_u_new_mail = htmlentities($_POST['logged_user_new_mail']);
				$personal_u_old_mail = htmlentities($_POST['logged_user_mail']);
				$personal_u_new_name = htmlentities($_POST['logged_user_new_name']);
				$personal_u_new_lname = htmlentities($_POST['logged_user_new_lname']);
				$personal_u_new_pass = htmlentities($_POST['logged_user_new_pass']);
				$personal_u_old_pass = htmlentities($_POST['logged_user_pass']);
				
				
				
				
				$up_data = array();
				$up_data['u_update_new_mail'] = $personal_u_new_mail;
				$up_data['u_update_old_mail'] = $personal_u_old_mail;
				$up_data['u_update_new_name'] = $personal_u_new_name;
				$up_data['u_update_new_lname'] = $personal_u_new_lname;
				$up_data['u_update_new_pass'] = $personal_u_new_pass;
				$up_data['u_update_old_pass'] = $personal_u_old_pass;
				
				
				$data_N_Source = array();
				$data_N_Source['data_object'] = $data_object;
				$data_N_Source['data'] = $up_data;
				
				
				save_user_personal_up_data($data_N_Source);
				
				
			}elseif(isset($_POST['account_deactivate'])){
				
				
				$delete_key = array();
				$deactivate_mail = $_POST['deactivation_mail'];
				$delete_key['delete_mail'] = $deactivate_mail;
				
				$data_N_Source = array();
				$data_N_Source['data_object'] = $data_object;
				$data_N_Source['data'] = $delete_key;
				
				deactivate_user($data_N_Source);
				
				
				
				
			}// End of check if user about form has been submited
			
		
	}// End of process update function
	
	
	
	
	function save_user_up_data($data_source){
			
			
			$data = $data_source['data'];
			$source = $data_source['data_object'];
			
			$up_response = $source->update_user_data($data);
			
			if(gettype($up_response) == 'array'){
				
				
				
				echo json_encode($up_response);exit;
		
				
			}else{
				
			
				$unkonwn = array();
				
				$unkonwn['id'] = 'bio';
				$unkonwn['id_status'] = 'bio fail';
				$unkonwn['msg'] = $up_response;
				$unkonwn['user_up_status'] = "failed";
				
				
				echo json_encode($unkonwn);exit;
				
			}
			
			
			
			
		}// End of save user data function
		
		
		function save_user_personal_up_data($data_source){
			
			
			$data = $data_source['data'];
			$source = $data_source['data_object'];
			
			$up_response = $source->update_user_personal_data($data);
			
			
			
			if(gettype($up_response) == 'array'){
				
				
				if($up_response['id_status'] == 'personal success'){
					
					
					
					
				$_SESSION['log_status'] = true;
				$_SESSION['user_log_name'] = $up_response['firstName'];
				$_SESSION['user_log_lname'] = $up_response['lastName'];
				$_SESSION['user_log_mail'] = $up_response['emailAddress'];
				$_SESSION['user_log_pass'] = $up_response['password'];
				
				echo json_encode($up_response);exit;
				
					
					
					
					
					
				}else{
					
					echo json_encode($up_response);exit;
				
				}
		
				
			}else{
				
			
				$unkonwn = array();
				
				$unkonwn['id'] = 'personal';
				$unkonwn['id_status'] = 'personal fail';
				$unkonwn['msg'] = $up_response;
				$unkonwn['user_up_status'] = "failed";
				
				
				echo json_encode($unkonwn);exit;
				
			}
			
			
			
			
		}// End of save user data function
		
		
		
		function deactivate_user($data_source){
			
			
			$data = $data_source['data'];
			$source = $data_source['data_object'];
			
			$del_response = $source->delete_user($data);
			
			
			
			if(gettype($del_response) == 'array'){
				
				
				if($del_response['id_status'] == 'deactivation success'){
					
					
					
					unset($_SESSION['log_status']);
					unset($_SESSION['user_log_name']);
					unset($_SESSION['user_log_lname']);
					unset($_SESSION['user_log_mail']);
					unset($_SESSION['user_log_pass']);
					
					
					
				echo json_encode($del_response);exit;
				
					
					
					
					
					
				}else{
					
					echo json_encode($del_response);exit;
				
				}
		
				
			}else{
				
			
				$unkonwn = array();
				
				$unkonwn['id'] = 'user deactivation';
				$unkonwn['id_status'] = 'deactivation fail';
				$unkonwn['msg'] = $del_response;
				
				
				
				echo json_encode($unkonwn);exit;
				
			}
			
			
			
			
		}// End of save user data function




?>