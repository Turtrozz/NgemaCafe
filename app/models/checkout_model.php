<?php if(session_status() == PHP_SESSION_NONE){session_start();}


	class CheckoutModel extends BaseModel{
		
		private $db;
		
		public function __construct(){
			
			$this->db= $this->createDb();
			
		}// End of shop model construct method
		
		
		public function cartData(){
			
			
			return $this->query_shop_db();
			
			
		}// End of appData function
		
		
		private function query_shop_db($product_id){
			
			
			
			$query ="SELECT * FROM products WHERE productID = :product_id LIMIT 1";
			
			
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
		
		
		public function check_if_cart_exists(){
			
			
			if(isset($_SESSION['ngema_cart']) && count($_SESSION['ngema_cart']) >= 1 ){
			
				
			
				$cart_products = array();
				$prod_quant = 0;
				$product_total = 0;
				
				
			
				
				for($p = 0; $p < count($_SESSION['ngema_cart']); $p++){
					
					
					$prod_quant = $_SESSION['ngema_cart'][$p]['prod_quant'];
					$prod_id = $_SESSION['ngema_cart'][$p]['prod_id'];
					
					$product = $this->query_shop_db($prod_id);
					
					$product['prod_quant'] = $prod_quant;
					
					$product_total = number_format($product['listPrice'] * $prod_quant,2);
					$product['prod_total'] = $product_total;
					
					
					$cart_products[] = $product;
					
				}
				
				
				return $cart_products;
			
			}
			else{
				
				$response =  'oops! <br />Your cart is empty.';
				return $response;
				
			}
			
			
			
		}// End of check if cart exists function
		
		
		
	}// End of shop model extends baseModel




?>