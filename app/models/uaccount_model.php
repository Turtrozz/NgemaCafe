<?php



class UaccountModel extends BaseModel{
	
	
		private $db;
		
		
		
		
		public function __construct(){
			
			$this->db = $this->createDb();
			
			
		}// End of productlistModel class constructor
		
		
		
		public function product_info($product_id){
			
			return $this->query_shop_db($product_id);
			
			
		}
		
		
		private function query_shop_db($product_id){
			
			
			
			$query ="SELECT * FROM products WHERE productID = :product_id ";
			
			
			try{
				
			
				$pdo_statement = $this->db->prepare($query);
				$pdo_statement->bindValue(':product_id',$product_id);
				$pdo_statement->execute();
				$product_info = $pdo_statement->fetch();
				$pdo_statement->closeCursor();
				
			
				return $product_info;
			
			
				
			}
			catch(PDOException $e){
				
				
				echo 'The following error occured'.$e->getMessage();
				
			}
			
			
			
		}// End of query db method
		
		
}// End of registered model class



?>