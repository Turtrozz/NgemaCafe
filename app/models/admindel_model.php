<?php


	class AdmindelModel extends BaseModel{
		
		private $db;
		
		public function __construct(){
			
			$this->db= $this->createDb();
			
		}// End of shop model construct method
		
		
		public function shopData(){
			
			
			return $this->query_shop_db();
			
			
		}// End of appData function
		
		
		private function query_shop_db(){
			
			
			
			$query ="SELECT * FROM categories";
			
			
			try{
				
			
				$pdo_statement = $this->db->prepare($query);
				$pdo_statement->execute();
				$restuarants = $pdo_statement->fetchAll();
				
			
				return $restuarants;
			
			
			}
			catch(PDOException $e){
				
				
				echo 'The following error occured'.$e->getMessage();
				
			}
			
			
			
		}// End of query db method
		
		
		
		
		public function adminProdData($prod_id){
			
			
			return $this->query_shop_admin($prod_id);
			
			
		}// End of appData function
		
		
		
		
		private function query_shop_admin($prod_id){
			
			
			
			$query ="SELECT * FROM products WHERE productID = :product_id ";
			
			
			try{
				
			
				$pdo_statement = $this->db->prepare($query);
				$pdo_statement->bindValue(':product_id',$prod_id);
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