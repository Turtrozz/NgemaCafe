<?php




class Mail_User{
	
	
	private static $user_data;
	
	public static function send_mail_to_user($data){
		
		
		self::$user_data = $data;
		self::prepare_mail();
		
			
		
		
	}// End of static function send_mail_to_user
	
	
	private static function prepare_mail(){
		
		
		
		
		
		
			$email_heads = self::set_headers();
			$email_dest = self::set_destination();
			$email_msg = self::set_message();
						self::mail_send($email_dest,$email_msg,$email_heads);
			
			
			
			
			
		
		
		
		
	}//End of prepare mail function
	
	
	private static function filter_email(){
		
		
		
		$mail_valid_check_result = filter_input(INPUT_POST,self::$user_data['user_email'],FILTER_VALIDATE_EMAIL);
		
		return $mail_valid_check_result;
		
		
	}// End of filter email function
	
	
	private static function set_headers(){
		
		
		$headers = '';
		$headers .= 'From: 51435314@mylife.com\r\n';
		$headers .= 'Content-Type: text/html; charset=utf-8';
		$headers .= "\r\n Reply-To:".self::$user_data['user_email'];
		
		return $headers;
		
		
	}
	
	private static function set_destination(){
		
		if(isset(self::$user_data['database_save'])){
			
			$to = self::$user_data['user_email'].',info@turtrozz.com';
			
			return $to;
			
		}else{
			
			$to = 'info@turtrozz.com';
			
			return $to;
		}
		
		
		
		
	}// End of set destinatin
	
	
	private static function set_message(){
		
		$email_message = '';
		
		if(isset(self::$user_data['database_save'])){
		
		$email_message .=<<<MESSAGE
		
		<hl>Turtrozz Launch Subscription</h1>
		
		<h2>Dear sir/madam</h2>
		<p>We would like to thank you for subscribing for our web app launch.<br />
		   We cannot wait to notify you when it occurs </p>
		
		
		
MESSAGE;
		
	}else if(isset(self::$user_data['information_data'])){
		
		
		$simplified = '';
		foreach(self::$user_data as $key => $value){
			
			
			if($key != 'information_data'){
				
			$simplified .= "<p>${key} :"."${value}</p>";
			
			}
			else{
				
				continue;
			}
			
			
		}// End of foreach
			
			
		
		$email_message .=<<<MESSAGE
		
		<hl>Information Request</h1>
		
		
		{$simplified}
		
		
MESSAGE;
		
		
	}else{
		
		$simplified = '';
		foreach(self::$user_data as $key => $value){
			
			
			if($key != 'quotation_data'){
				
			$simplified .= "<p>${key} :"."${value}</p>";
			
			}
			else{
				
				continue;
			}
			
			
		}// End of foreach
			
			
		
		$email_message .=<<<MESSAGE
		
		<hl>Quotation and Service Request</h1>
		
		
		{$simplified}
		
		
MESSAGE;
		
		
		
	}// End of if else statement
	
	
	return $email_message;
	
	}// End of set message function
	
	
	
	private function mail_send($dest,$msg,$heads){
		
			$subj = '';
			if(stripos($msg,'user_name',0) != false){
				
				$subj = 'Turtrozz Information Request';
				
			}else if(stripos($msg,'client_qname',0) != false){
				
				$subj = 'Turtrozz Quotation Request';
				
			}
			else{
				
				$subj = 'Turtrozz Subscription';
				
			}
		
		
		
		
		
		
		
			
			
		
		
		
		Db_Storage::save_to_db(self::$user_data);
		
		
		
		
	}// End of mail send 
	
	
	
	
}// End of mail user class





class Db_Storage{
	
	
	
	private static $data = '';
	
	private static $dsn ="mysql:host=localhost;dbname=turtrozz";
    private static $user_name = "turtroZZ";
    private static $password = "1990@59@Turtrozz@17";
	private static $set_errmode = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	
	
	
	
	public static function save_to_db($data_to_save){
		
		
		self::$data = $data_to_save;
		$db = self::connect_to_db();
		
		if(gettype(self::$data) == 'array'){
			
			$query = self::define_query();
			self::save_data($db,$query);
		
			
		}else{
			
			
			$_f_data = format_data();
			
		}// end of data format if else check
		
		
		
	}// End of save to database static function
	
	private static function connect_to_db(){
		
		try{
		
			$pdo_object = new PDO(self::$dsn,self::$user_name,self::$password,self::$set_errmode);
			return $pdo_object;
		
		}
		catch(PDOException $erro){
			
			echo 'The following error occured :'.$erro->getMessage();exit;
			
		}// End of try catch statement
		
		
		
	}// End of connect_to_db class method
	
	
	private static function define_query(){
		
		 $user_name = self::$data['client_qname'];
		 $user_s_name = self::$data['client_qsname'];
		 $user_tel = self::$data['client_qtel'];
		 $user_mail = self::$data['user_email'];
		 $user_date = self::$data['sub_date'];
		 $user_type = self::$data['sub_type'];
		 $user_fee = self::$data['sub_fee'];
		 $user_a_name = self::$data['account_hold'];
		 $user_num = self::$data['account_num'];
		 $user_a_cvv = self::$data['account_cvv'];
		 $user_status = 1;
		 
		 
		 $query ="
		 
		 	INSERT INTO subscribers 
					(subscriber_id,subscriber_name,surname,cell_nom,subscriber_mail,sub_date,sub_type,sub_fee,account_holder,account_num,cvv,subscriber_status)
				  VALUES
				  (NULL,'$user_name','$user_s_name','$user_tel','$user_mail','$user_date','$user_type','$user_fee','$user_a_name','$user_num','$user_a_cvv',$user_status)
		 
		 
		 ";
		
		return $query;
		
	}// End of set query data class mehtod
	
	
	private static function format_data(){
		
		return $formatted_data;
		
		
	}// End of format data class method
	
	private static function save_data($database,$db_query){
		
		
		
		$sub_status = self::check_if_subscriber($database);
		
		if(gettype($sub_status) == 'array'){
			
			echo 'You have subscribed to SuperClean CarWash';
			
		}else{
		
				
				try{
					
					$pdo_data_object =$database->prepare($db_query);
					$pdo_data_object->execute();
					$pdo_data_object->closeCursor();
					
					
					echo "Thanks for subscribing to SuperClean CarWash.";
					
					
				}
				catch(PDOException $e){
					
					
					echo 'An error occured :'.$e->getMessage();
					
				}// End of query try catch statement
				
		
		}
		
		
	}// End of save data to the database class
	
	
	
	private static function check_if_subscriber($database){
		
		
		$user_mail = self::$data['user_email'];
		
		$query ="
			
			SELECT * FROM subscribers WHERE subscriber_mail  LIKE '$user_mail'
		
		";
		
		try{
			
			
			$pdo_statement = $database->prepare($query);
			$pdo_statement->bindValue(":user_mail",$user_mail);
			$pdo_statement->execute();
			$data_set = $pdo_statement->fetch();
			$pdo_statement->closeCursor();
			
			return $data_set;exit;
			
			
			
			
			
		}
		catch(PDOException $e){
			
			
			echo 'There was an error trying to connect to the database';exit;
			
		}
		
		
	}// End of check if subscriber exist function
	
	
	
	
}// End of database storage class






?>