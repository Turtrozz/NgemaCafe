<?php



class UaccountsetModel extends BaseModel{
	
	
		private $db;
		
		
		
		
		public function __construct(){
			
			$this->db = $this->createDb();
			
			
		}// End of productlistModel class constructor
		
		
		
		public function user_info($user_cred){
			
			return $this->query_shop_db($user_cred);
			
			
		}
		
		
		private function query_shop_db($user_cred){
			
			
			
			$u_mail = $user_cred['user_mail'];
			$u_pass = $user_cred['user_pass'];
			
			$query ="SELECT emailAddress,password,firstName,lastName,bio
					FROM customers 
					INNER JOIN customeroptons
					WHERE emailAddress = :u_email AND password = :u_pass; 
					ON customers.customerID = customeroptons.customerID LIMIT 1";
			
			
			try{
				
			
				$pdo_statement = $this->db->prepare($query);
				$pdo_statement->bindValue(':u_email',$u_mail);
				$pdo_statement->bindValue(':u_pass',$u_pass);
				$pdo_statement->execute();
				$user_info = $pdo_statement->fetch();
				$pdo_statement->closeCursor();
				
			
				return $user_info;exit;
			
			
				
			}
			catch(PDOException $e){
				
				
				echo 'The following error occured'.$e->getMessage();exit;
				
			}
			
			
			
		}// End of query db method
		
		
}// End of registered model class



?>