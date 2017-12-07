<?php


	class AdminproddetailModel extends BaseModel{
		
		private $db;
		private $data_req;
		
		
		
		public function __construct($data_requ){
			
			$this->db = $this->createDb();
			$this->data_req = $data_requ;
			
			
			
		}// End of productlistModel class constructor
		
		
		
		public function product_info(){
			
			return $this->query_shop_db();
			
			
		}
		
		
		private function query_shop_db(){
			
			
			
			$query ="SELECT * FROM products WHERE productID = :product_id ";
			
			
			try{
				
			
				$pdo_statement = $this->db->prepare($query);
				$pdo_statement->bindValue(':product_id',$this->data_req);
				$pdo_statement->execute();
				$product_info = $pdo_statement->fetch();
				$pdo_statement->closeCursor();
				
			
				return $product_info;
			
			
			}
			catch(PDOException $e){
				
				
				echo 'The following error occured'.$e->getMessage();
				
			}
			
			
			
		}// End of query db method
		
		
		
		
		
		
		
		
	}// End of shop model extends baseModel




?>