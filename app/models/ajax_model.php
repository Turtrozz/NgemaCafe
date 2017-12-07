<?php


class AjaxModel extends BaseModel{
		
		private $db;
		
		
		
		
		public function __construct(){
			
			$this->db = $this->createDb();
			
			
			
		}// End of productlistModel class constructor
		
		
		
		public function product_data($product){
			
			return $this->query_shop_db($product);
			
			
		}
		
		
		private function query_shop_db($product){
			
			$product_id = $product;
			
			$query ="SELECT * FROM products WHERE productID = :product_id ";
			
			
			try{
				
			
				$pdo_statement = $this->db->prepare($query);
				$pdo_statement->bindValue(':product_id',$product_id);
				$pdo_statement->execute();
				$product_data = $pdo_statement->fetch();
				$pdo_statement->closeCursor();
				
			
				return $product_data;
			
			
			}
			catch(PDOException $e){
				
				
				echo 'The following error occured'.$e->getMessage();
				
			}
			
			
			
		}// End of query db method
		
		
		public function manipulate_user_registration($register_data){
			
			
			$check_result = $this->check_if_user_exist($register_data);
			
			if(gettype($check_result) != 'array'){
				
				
				$save_result = $this->saveUser($register_data);
				
				if(gettype($save_result) == 'boolean' && $save_result == true){
					
						$check_r = $this->check_if_user_exist($register_data);
						
						if(gettype($check_r) == 'array'){
							
							
							$registered_user_data = array();
							
							$registered_user_data['registered_u_mail'] = $check_r['emailAddress'];
							$registered_user_data['registered_u_name'] = $check_r['firstName'];
							$registered_user_data['registered_u_lname'] = $check_r['lastName'];
							$registered_user_data['registered_u_pass'] = $check_r['password'];
							
							
							return $registered_user_data;exit;
							
							
						}else{
							
							$err_msg = 'User could not be auto logged, an error occured';
							return $err_msg;exit;
						}
					
					
				}else{
					
					$er_msg = 'An error, occured trying to register, please try again';
					return $er_msg;exit;
					
				}
				
			}else{
				
				$response_msg = "The specified email belongs to a registered user,please try another";
				echo $response_msg;exit;
				
			}
			
			
			
			
		}// End of manipulate user registration method
		
		
		private function check_if_user_exist($register_data){
			
			
			$user_mail = $register_data['user_email'];
			
			$user_query = 'SELECT * FROM customers WHERE emailAddress = :email_address';
			
			
			try{
				
				$pdo_statement = $this->db->prepare($user_query);
				$pdo_statement->bindValue(':email_address',$user_mail);
				$pdo_statement->execute();
				$fetch_result = $pdo_statement->fetch();
				
				return $fetch_result;exit;
				
				
			}catch(PDOException $e){
				
				echo $e->getMessage();exit;
				
			}
			
			
			
			
		}// End of check if user exitst method
		
		private function saveUser($register_data){
			
			
			$user_mail = $register_data['user_email'];
			$user_pass = $register_data['user_password'];
			$user_name = $register_data['user_name'];
			$user_last_name = $register_data['user_last_name'];
			$user_province = $register_data['user_province'];
			
			
			$save_query = 'INSERT INTO customers (emailAddress,password,firstName,lastName,province)
							VALUES (:email,:pass,:name,:last_name,:province)';
							
			try{
				
				
				$pdo_statement = $this->db->prepare($save_query);
				$pdo_statement->bindValue(':email',$user_mail);
				$pdo_statement->bindValue(':pass',$user_pass);
				$pdo_statement->bindValue(':name',$user_name);
				$pdo_statement->bindValue(':last_name',$user_last_name);
				$pdo_statement->bindValue(':province',$user_province);
				$save_result = $pdo_statement->execute();
				
				return $save_result;exit;
				
				
				
			}catch(PDOException $e){
				
				echo $e->getMessage();exit;
				
			}
			
			
			
		}// End of save user function
		
		
		
	public function update_user_data($up_data){
		
		$operation = $up_data['up_operation'];
	
		if($operation == 'user options'){
			
			$table_name = 'customeroptons';
			
		}elseif($operation == 'user personal'){
			
			$table_name = 'customers';
		}
		
		$u_response = $this->update_user($up_data,$table_name);
		return $u_response;exit;
		
	}
	
	
	private function update_user($up_data,$tab_name){
		
		
		if($tab_name == 'customeroptons'){
			
			
			$u_opt_response = $this->update_u_options($up_data);
			
			if(gettype($u_opt_response) == 'boolean' && $u_opt_response == true){
				
				 $key_mail = $up_data['u_update_mail'];
				 $retriv_response = $this->retrieve_updated($key_mail);
				if(gettype($retriv_response) == 'array'){
					
					
					$retriv_response['id'] = 'bio';
					$retriv_response['id_status'] = 'bio success';
					
					return $retriv_response;exit;
					
				}else{
					
					$error_occured = array();
					$error_occured['id'] = 'failure';
					$error_occured['id_status'] = 'bio fail';
					$error_occured['message'] = 'An error occured trying to update bio';
					
					return $error_occured;exit;
					
				}
				
				
				
				
			}else{
				
				$error_occured = array();
				$error_occured['id'] = 'failure';
				$error_occured['id_status'] = 'bio fail';
				$error_occured['message'] = 'An error occured trying to update bio';
				
				return $error_occured;exit;
				
			}
			
		}elseif($tab_name == 'customers'){
			
			
			$u_opt_response = $this->update_u_options($up_data);
			
			if(gettype($u_opt_response) == 'boolean' && $u_opt_response == true){
				
				 $key_mail = $up_data['u_update_mail'];
				 $retriv_response = $this->retrieve_updated($key_mail);
				if(gettype($retriv_response) == 'array'){
					
					
					
					$retriv_response['id'] = 'bio';
					$retriv_response['id_status'] = 'bio success';
					
					return $retriv_response;exit;
					
				}else{
					
					$error_occured = array();
					$error_occured['id'] = 'bio';
					$error_occured['id_status'] = 'bio fail';
					$error_occured['msg'] = 'An error occured trying to update bio';
					
					return $error_occured;exit;
					
				}
				
				
				
				
			}else{
				
				$error_occured = array();
				$error_occured['id'] = 'bio';
				$error_occured['id_status'] = 'bio fail';
				$error_occured['msg'] = 'An error occured trying to update bio';
				
				return $error_occured;exit;
				
			}
			
			
			
			
			
			
			
			
		}// Outter if else statement
		
	}// End of update user method
	
	
	private function update_u_options($data){
		
		
		$up_mail = $data['u_update_mail'];
		$u_text = $data['u_update_text'];
		$up_query = 'UPDATE customeroptons SET bio = :bio_update WHERE email_address = :u_up_mail';
		
		try{
				
				
				$pdo_statement = $this->db->prepare($up_query);
				$pdo_statement->bindValue(':u_up_mail',$up_mail);
				$pdo_statement->bindValue(':bio_update',$u_text);
				$update_result = $pdo_statement->execute();
				return $update_result;exit;
				
				
				
			}catch(PDOException $e){
				
				echo $e->getMessage();exit;
				
			}
			
		
		
	}// End of update user options method
	
	
	private function retrieve_updated($access_key){
		
		
		$retriv_query = 'SELECT bio FROM customeroptons WHERE email_address = :u_up_mail';
		
		try{
				
				
				$pdo_statement = $this->db->prepare($retriv_query);
				$pdo_statement->bindValue(':u_up_mail',$access_key);
				$pdo_statement->execute();
				$ret_result = $pdo_statement->fetch();
				
				return $ret_result;exit;
				
				
				
			}catch(PDOException $e){
				
				echo $e->getMessage();exit;
				
			}
			
		
		
	}//End of retrieve updated function
	
	
	
	
	/*+++++++++++++++++++User personal data++++++++++++++++++++++++++*/
	
	public function update_user_personal_data($up_data){
		
		
	
		$personal_n_mail = $up_data['u_update_new_mail'];
		$personal_o_mail = $up_data['u_update_old_mail'];
		$personal_n_name = $up_data['u_update_new_name'];
		$personal_n_lname = $up_data['u_update_new_lname'];
		$personal_n_pass = $up_data['u_update_new_pass'];
		
		
		$up_query = "UPDATE `customers` SET `emailAddress` = :mail, `password` = :pass,
							`firstName` = :f_name,`lastName` = :l_name
						    WHERE `emailAddress` = :old_mail";
							
							
		
		
		try{
				
				
				$pdo_statement = $this->db->prepare($up_query);
				$pdo_statement->bindValue(':mail',$personal_n_mail);
				$pdo_statement->bindValue(':pass',$personal_n_pass);
				$pdo_statement->bindValue(':f_name',$personal_n_name);
				$pdo_statement->bindValue(':l_name',$personal_n_lname);
				$pdo_statement->bindValue(':old_mail',$personal_o_mail);
				$up_result = $pdo_statement->execute();
				
				
				
				if(gettype($up_result) == 'boolean' && $up_result == true){
					
					$retriv_response = $this->retrieve_u_updated_personal($personal_n_mail);
					
					if(gettype($retriv_response) == 'array'){
						
						
						$retriv_response['id'] = 'personal';
						$retriv_response['id_status'] = 'personal success';
						
						return $retriv_response;exit;
						
					}else{
						
						$retriv_response = array();
						$retriv_response['id'] = 'personal';
						$retriv_response['id_status'] = 'personal fail';
						$retriv_response['msg'] = 'An error occured trying to update information';
						
						return $retriv_response;exit;
						
					}
					
					
					
				}else{
					
					$retriv_response = array();
					$retriv_response['id'] = 'personal';
					$retriv_response['id_status'] = 'personal fail';
					$retriv_response['msg'] = 'An error occured trying to update information';
					
					return $retriv_response;exit;
				
			}
				
				
				
			}catch(PDOException $e){
				
				
				$retriv_response = array();
				$retriv_response['id'] = 'personal';
				$retriv_response['id_status'] = 'personal fail';
				$retriv_response['msg'] = $e->getMessage();
				return $retriv_response;exit;
				
				
			}
		
		
		
	}// End of update personal user data method
	
	
	
	
	
	private function retrieve_u_updated_personal($mail){
		
		
		
		$user_mail = $mail;
			
			$user_query = 'SELECT * FROM customers WHERE emailAddress = :email_address';
			
			
			try{
				
				$pdo_statement = $this->db->prepare($user_query);
				$pdo_statement->bindValue(':email_address',$mail);
				$pdo_statement->execute();
				$fetch_result = $pdo_statement->fetch();
				
				return $fetch_result;exit;
				
				
			}catch(PDOException $e){
				
				echo $e->getMessage();exit;
				
			}
			
			
		
		
		
		
	}// End of update user personal information method
	
	
	
	// Deactivate user
	
	public function delete_user($up_data){
		
		
	
		$delete_mail = $up_data['delete_mail'];
		
		
		
		$del_query = 'DELETE FROM customers WHERE emailAddress = :del_mail';
							
			try{
				
				
				$pdo_statement = $this->db->prepare($del_query);
				$pdo_statement->bindValue(':del_mail',$delete_mail);
				$del_result = $pdo_statement->execute();
				
				
				if(gettype($del_result) == 'boolean' && $del_result == true){
					
					
					$user_opt_del_result = $this->delete_user_options($delete_mail);
					return $user_opt_del_result;exit;
				
				}else{
					
					$new_array = array();
					
					$new_array['id'] = 'user deactivation';
					$new_array['id_status'] = 'deactivation fail';
					$new_array['msg'] = $e->getMessage();
					
					return $new_array;exit;
					
				}
				
				
				
			}catch(PDOException $e){
				
				
				$new_array = array();
					
				$new_array['id'] = 'user deactivation';
				$new_array['id_status'] = 'deactivation fail';
				$new_array['msg'] = $e->getMessage();
				
				return $new_array;exit;
				
				
				
			}
		
		
		
	}// End of update personal user data method
	
	
	private function delete_user_options($mail){
		
		
	
		$delete_mail = $mail;
		
		
		
		$del_query = 'DELETE FROM customers WHERE emailAddress = :del_mail';
							
			try{
				
				
				$pdo_statement = $this->db->prepare($del_query);
				$pdo_statement->bindValue(':del_mail',$delete_mail);
				$del_result = $pdo_statement->execute();
				
				
				if(gettype($del_result) == 'boolean' && $del_result == true){
					
					$new_array = array();
					
					$new_array['id'] = 'user deactivation';
					$new_array['id_status'] = 'deactivation success';
					$new_array['msg'] = 'You account is successfully deactivated';
					
					return $new_array;
				
				}
				
				
				
			}catch(PDOException $e){
				
				
				
				$new_array = array();
					
				$new_array['id'] = 'user deactivation';
				$new_array['id_status'] = 'deactivation fail';
				$new_array['msg'] = $e->getMessage();
				
				return $new_array;
				
				
			}
		
		
		
	}// End of update personal user data method
	
	
	
	
	/*=====================Admin Database Manipulation Code====================================*/
		
		public function update_shop_product($product_edit_data){
			
			
			
			
			$p_id = $product_edit_data['product_id'];
			$c_id = $product_edit_data['category_id'];
			$p_code = $product_edit_data['product_code'];
			$p_name = $product_edit_data['product_name'];
			$p_desc = $product_edit_data['product_desc'];
			$p_price = $product_edit_data['product_price'];
			
			$admin_query = "UPDATE `products` SET `productCode` = :code, `productName` = :name,
							`description` = :desc,`listPrice` = :price
						    WHERE `productID` = :productID";
							
			try{
				
				
				$pdo_statement = $this->db->prepare($admin_query);
				$pdo_statement->bindValue(':code',$p_code);
				$pdo_statement->bindValue(':name',$p_name);
				$pdo_statement->bindValue(':desc',$p_desc);
				$pdo_statement->bindValue(':price',$p_price);
				$pdo_statement->bindValue(':productID',$p_id);
				$update_result = $pdo_statement->execute();
				
				return $update_result;exit;
				
				
				
			}catch(PDOException $e){
				
				
				$message = $e->getMessage();
				return $message;exit;
				
				
			}
			
			
			
		}// End of update product
		
		
		
		
		
		public function add_shop_product($product_edit_data){
			
			
			
			
			
			$c_id = $product_edit_data['category_id'];
			$p_code = $product_edit_data['product_code'];
			$p_name = $product_edit_data['product_name'];
			$p_desc = $product_edit_data['product_desc'];
			$p_price = $product_edit_data['product_price'];
			
			$admin_query = 'INSERT INTO products (categoryID,productCode,productName,description,listPrice)
							VALUES(:category,:code,:name,:desc,:price)';
							
			try{
				
				
				$pdo_statement = $this->db->prepare($admin_query);
				
				$pdo_statement->bindValue(':category',$c_id);
				$pdo_statement->bindValue(':code',$p_code);
				$pdo_statement->bindValue(':name',$p_name);
				$pdo_statement->bindValue(':desc',$p_desc);
				$pdo_statement->bindValue(':price',$p_price);
				$add_result = $pdo_statement->execute();
				
				return $add_result;exit;
				
				
				
			}catch(PDOException $e){
				
				
				$message = $e->getMessage();
				return $message;exit;
				
				
			}
			
			
			
		}
		
		
		
		
		public function delete_shop_product($product_edit_data){
			
			
			
			$p_id = $product_edit_data['product_id'];
			
			
			$admin_query = 'DELETE FROM products WHERE productID = :productID';
							
			try{
				
				
				$pdo_statement = $this->db->prepare($admin_query);
				$pdo_statement->bindValue(':productID',$p_id);
				$del_result = $pdo_statement->execute();
				
				return $del_result;exit;
				
				
				
			}catch(PDOException $e){
				
				
				$message = $e->getMessage();
				return $message;exit;
				
				
			}
			
			
			
		}
		
		
		
		
		/*=====================Admin Database Manipulation Code====================================*/
		
		
		
		
		public function log_shop_user($register_data){
			
			
			$user_mail = $register_data['log_mail'];
			$user_pass = $register_data['log_pass'];
			
			$user_query = 'SELECT * FROM customers WHERE emailAddress = :mail AND password = :pass';
			
			
			try{
				
				$pdo_statement = $this->db->prepare($user_query);
				$pdo_statement->bindValue(':mail',$user_mail);
				$pdo_statement->bindValue(':pass',$user_pass);
				$pdo_statement->execute();
				$fetch_result = $pdo_statement->fetch();
				
				if(gettype($fetch_result) == 'array'){
					
					
					return $fetch_result;exit;
					
					
				}else{
					
					return $fetch_result;exit;
					
					
				}
				
				
			}catch(PDOException $e){
				
				return $e->getMessage();exit;
				
			}
			
			
			
			
		}// End of check if user exitst method
		
		
		
		
		
		
	}// End of Ajax model extends baseModel





?>