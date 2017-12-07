<?php


	class ShopModel extends BaseModel{
		
		private $db;
		
		public function __construct(){
			
			$this->db = $this->createDb();
			
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
		
		
		
	}// End of shop model extends baseModel




?>