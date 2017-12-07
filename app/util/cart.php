<?php
session_start();



error_reporting(E_ALL);
ini_set('display_errors','1');


/*
if(isset($_SESSION['ngema_cart'])){
	
	unset($_SESSION['ngema_cart']);exit;
	
}

*/

if(isset($_POST['product_id'])):
	
	
	
	 
	
	$product_id = $_POST['product_id'];
	
	if(isset($_POST['cart_quant'])){
		
		$cart_items = $_POST['cart_quant'];
		$cart_items = intval($cart_items);
		
	}
	$product_id = intval($product_id);
	
	if(isset($_POST['product_price'])){
		
		$product_price = $_POST['product_price'];
	
	}
	$prod_in_the_cart = false;
	$cart_sum = 0;
	$total_products = 0;
	
	
	
	
	if(isset($_POST['add_to_cart'])):
	
	
		
		
		if(!isset($_SESSION['ngema_cart']) || count($_SESSION['ngema_cart']) < 1 ){
			
			$num_products = 1;
			
			if(isset($cart_items)){
				
				$num_products = $cart_items;
				
			}
			
		$_SESSION['ngema_cart'] = array(array('prod_id' => $product_id,'prod_quant' => $num_products,'prod_price' => $product_price));
			
			
			
			
			$first_product = $_SESSION['ngema_cart'][0];
			
			$prodId = $first_product['prod_id'];
			$productQuantity = $first_product['prod_quant'];
			
			$cart_product_data = self::$database_object->product_data($prodId);
			$cart_product_data['productQuant'] = $productQuantity;
			$cart_product_data['numProducts'] = count($_SESSION['ngema_cart']);
			$cart_product_data['cartAmount'] = 'R'.number_format($cart_product_data['listPrice'],2);
			
			
			
			echo json_encode($cart_product_data);exit;
			
			
			
			
		}else{
			
			
			
			
			for($i = 0;$i < count($_SESSION['ngema_cart']); $i++){
				
				
				
				
				
				$cart_product = $_SESSION['ngema_cart'][$i];
				
				while(list($key,$value) = each($cart_product) ):
				
					$num_products = 1;
			
			
						
					if($key == 'prod_id' && $value == $product_id):
						
						
						if(isset($cart_items)){
				
							$num_products = $cart_items;
				
						}
						
						$_SESSION['ngema_cart'][$i]['prod_quant'] = $_SESSION['ngema_cart'][$i]['prod_quant'] +$num_products;
						
						$current_product = $_SESSION['ngema_cart'][$i];
			
						$prodId = $current_product['prod_id'];
						$productQuantity = $current_product['prod_quant'];
						
						$current_product_data = self::$database_object->product_data($prodId);
						$current_product_data['productQuant'] = $productQuantity;
						
									
								
						
						
						foreach($_SESSION['ngema_cart'] as $prod){
							
							
							$cart_sum += number_format($prod['prod_price']) * $prod['prod_quant'];
							
							if($prod['prod_quant'] > 1){
								
								$total_products += ($prod['prod_quant'] - 1);
								
							}
							
						};
					
						$current_product_data['numProducts'] = count($_SESSION['ngema_cart']) + $total_products;
						$current_product_data['cartAmount'] = 'R'.number_format($cart_sum,2);
								
						$prod_in_the_cart = true;
						
						echo json_encode($current_product_data);exit;

						
						break;
						
					endif;
					
					
				endwhile;
				
				
				
				
		};
			
			
			if($prod_in_the_cart == false){
				
				$num_products = 1;
				
				if(isset($cart_items)){
				
					$num_products = $cart_items;
				
				}
				
				$_SESSION['ngema_cart'][] = array('prod_id'=>$product_id,'prod_quant'=> $num_products,'prod_price' => $product_price);
				
				
				 $new_product = end($_SESSION['ngema_cart']);
				 
				 
				 $prodId = $new_product['prod_id'];
				 $productQuantity = $new_product['prod_quant'];
				
				 $new_product_data = self::$database_object->product_data($prodId);
				 $new_product_data['productQuant'] = $productQuantity;
				
				 
				 
				 foreach($_SESSION['ngema_cart'] as $prod){
							
							
							$cart_sum += number_format($prod['prod_price']) * $prod['prod_quant'];
							
							
							if($prod['prod_quant'] > 1){
								
								$total_products += ($prod['prod_quant']-1);
								
							}
							
						};
					
				 $new_product_data['numProducts'] = count($_SESSION['ngema_cart']) + $total_products;		
				$new_product_data['cartAmount'] = 'R'.number_format($cart_sum,2);
				
				
				echo json_encode($new_product_data);exit;
				
				
			}// End of adding new product to the cart if statement
			 
			
			
		}
	
	
	elseif(isset($_POST['remove_product'])):
	
	
		if(isset($_SESSION['ngema_cart']) && count($_SESSION['ngema_cart']) >= 1){
			
			$redirect = array('action'=> "redirect");
			
			for($p = 0; $p < count($_SESSION['ngema_cart']);$p++){ 
				
				
				while(list($key,$value) = each($_SESSION['ngema_cart'][$p])):
					
					
					if($key == 'prod_id' && $value == $product_id):
						
						
						array_splice($_SESSION['ngema_cart'],$p,1);
						
						if(count($_SESSION['ngema_cart']) < 1){
							
							
							unset($_SESSION['ngema_cart']);
							echo json_encode($redirect);exit;
							
						}// End of innermost if statement
						
						echo json_encode($redirect);exit;
						
						
						
						
						
						
					endif;
					
					
				endwhile;
				
				
				
			}// End of for loop
			
			
			
		};
	
	
	
	elseif(isset($_POST['update_product'])):
	
		
		
		
		
		if(isset($_SESSION['ngema_cart']) && count($_SESSION['ngema_cart']) >= 1){
			
			$redirect = array('action'=> 'redirect');
			$update_prod_quant = $_POST['update_val'];
			$update_prod_quant = intval($update_prod_quant);
			
			for($p = 0; $p < count($_SESSION['ngema_cart']);$p++){ 
				
				
				while(list($key,$value) = each($_SESSION['ngema_cart'][$p])):
					
					
					if($key == 'prod_id' && $value == $product_id):
						
						
						$_SESSION['ngema_cart'][$p]['prod_quant'] = $update_prod_quant;
						echo json_encode($redirect);exit;
						
						
						
						
						
						
					endif;
					
					
				endwhile;
				
				
				
			}// End of for loop
			
			
			
		};
		
		
		
		
		
		
	
	endif;
	

	
	
	
endif;// End of check product if statement





function build_popu_data($database_object){
	
	
	
	if(isset($_SESSION['ngema_cart']) && count($_SESSION['ngema_cart']) > 0):
	
		$sum_cart_products = array();
		
		if(count($_SESSION['ngema_cart']) > 3){
			
			for($cart_prod = 0; $cart_prod < count($_SESSION['ngema_cart']); $cart_prod++){
				
				
				$prod_price_tot = 0;
				$prod_id = $_SESSION['ngema_cart'][$cart_prod]['prod_id'];
				$prod_quant = $_SESSION['ngema_cart'][$cart_prod]['prod_quant'];
				
				$product = $database_object->product_data($prod_id);
				$prod_price = $product['listPrice'];
				
				$prod_price_tot = number_format(($prod_price * $prod_quant),2);
				$product['listPrice'] = 'R'.$prod_price_tot;
				$product['prod_quant'] = $prod_quant;
				
				$sum_cart_products[] = $product;

				if($cart_prod == 2){
					
					return json_encode($sum_cart_products);
					break;exit;
				}
				
				
				
			}
			
			
		}else{
			
			
			foreach($_SESSION['ngema_cart'] as $prod):
			
			
				$prod_price_tot = 0;
				$prod_id = $prod['prod_id'];
				$prod_quant = $prod['prod_quant'];
				
				$product = $database_object->product_data($prod_id);
				$prod_price = $product['listPrice'];
				
				$prod_price_tot = number_format(($prod_price * $prod_quant),2);
				$product['listPrice'] = 'R'.$prod_price_tot;
				$product['prod_quant'] = $prod_quant;
				
				$sum_cart_products[] = $product;

				
				
			
			endforeach;
			
			return json_encode($sum_cart_products);exit;
				
			
		}
	
	
	else:
	
		$sum_cart_products[] = array('prod_none'=>'ngema_shop_cart_empty');
		$sum_cart_products[] = array('prod_msg'=>'Your cart is currently empty');
		return json_encode($sum_cart_products);
	
	endif;
		
		
		
	
	
}









function check_cart_total(){
	
	$total_products = 0;

	
	if(isset($_SESSION['ngema_cart']) && count($_SESSION['ngema_cart']) > 0):
	
	
		foreach($_SESSION['ngema_cart'] as $prod){
			
			
			if($prod['prod_quant'] > 1){
								
				$total_products += ($prod['prod_quant']-1);
								
			}
			
			
		}// End of count products function
		
	
		$cart_total = count($_SESSION['ngema_cart']) + $total_products;
		return $cart_total;
	
	else:
	
		$cart_total = 0;
		return $cart_total;
		
	endif;
	
	
}// End of check cart total function

?>

