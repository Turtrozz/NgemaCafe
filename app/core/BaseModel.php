<?php



	class BaseModel{
		
		
		
		
		private static $dsn ="mysql:host=localhost;dbname=ngema_cafe";
		private static $user_name = "ngema";
		private static $password = "1990@ngema";
		private static $set_errmode = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			
		
		public static function createDb(){
			
			
			$ngema_db = self::connect_to_db();
			
			return $ngema_db;
			
			
		}// End of createDb static method
		
		
		public static function connect_to_db(){
			
			
			
			try{
		
			$database = new PDO(self::$dsn,self::$user_name,self::$password,self::$set_errmode);
			return $database;
			
			
		
			}
			catch(PDOException $erro){
				
				echo 'The following error occured :'.$erro->getMessage();exit;
				
			}// End of try catch statement
				
				
				
		}// End of connect to db static method




		
		
		
	}//End of base model class
	
	


?>