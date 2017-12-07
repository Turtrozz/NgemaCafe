<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='.jpg';
$thumb = 'thumb';
$shop = 'public/shop/shop_view';



?>


<div class="m-shop-content-container ">


	<?php include 'app/views/helpers/brand.php'; ?>
	
    <div class="m-product-content cart-adjust">
    
    	<h1>Your Cart</h1>
        
        
        <article>
    
    	
        
        
        <article>
        
        	
            
          
            
            <div class="cart-content">
            
            
            	<section>
            
            
            		<?php if(gettype($this->cart_d) == 'array'){ ?>
                    
                    
                    
                    <div id="cart-check">
                    
                    	<span>	
                        	<a href="<?php echo $app_path.$shop ?>"><button>continue shopping</button></a>
                        	<a href="<?php echo $app_path.'public/checkout/checkout' ; ?>"><button>Proceed to checkout</button></a>
                        <span>
                    
                    </div>
                    
            		<table>
                    
                    	<thead>
                    	
                        <tr>
                        
                                <td>
                                
                                	    
                                
                                </td>
                                
                                <td>
                                
                                    
                                
                                </td>
                                
                                <td>
                                
                                    Product
                                
                                </td>
                                
                                <td>
                                
                                    Price
                                
                                </td>
                                
                                <td>
                                
                                    Quantity
                                
                                </td>
                                
                                 <td>
                                
                                    Total
                                
                                </td>
                            
                        </tr>
                        
                        </thead>
                        
                        
            			<?php
						
						
							$labelUpForm = 0;
							foreach($this->cart_d as $product){ ?>
								
								
                                
								<tr>
								
									<?php
									
										$tableCols = 6;
										for($product_prop = 0; $product_prop < $tableCols; $product_prop++){?>
											
											
											<td>
                                            
                                            	
                                            	<?php
													
													switch($product_prop):
														
														case 0:
														echo '<form class="product-remove-f" onsubmit="return updateCartAjax(this);" >
														
															<input type="hidden" name="remove_product" value="remove" >
															<input type="hidden" name="product_id" value="'.$product['productID'].'" />
															<input type="submit" name="remove_but" value="X" />
															</form>';
														break;
														
														case 1:
														echo '
															<img src="'.$app_path.$image_path.$product['productID'].$thumb.$image_format.'" 
															width="80" height="53" alt="product-image" />';
														break;
														
														case 2:
															echo '<small class="prod-name">'.$product['productName'].'</small>';
														break;
														
														case 3:
															echo 'R'.$product['listPrice'];
														break;
														
														case 4:
															echo '<form class="product-update-f" onsubmit="return confirmProductUpdate(this)">
														
															<input type="hidden" name="update_product" value="remove" >
															<input type="hidden" value="remove" />
															<input type="hidden" name="product_id" value="'.$product['productID'].'" />
															<input type="hidden" name="alt_val" value="'.$product['prod_quant'].'" />
															<input type="number" name="update_val" value="'.$product['prod_quant'].'" class="remove-field"  />
															<input type="submit" value="update" name="update_but" class="update-but" />
															
															</form>';
														break;
														
														default:
															echo 'R'.$product['prod_total'];
															
														
													endswitch;
												
												?>
                                            
                                            </td>
											
											
										<?php  }?>
								
								</tr>
								
								
								
							<?php $labelUpForm++; }?>
                        
                    </table>
                    
                    
                    	<table class="cart-total-sum">
                        
                        
                        	<?php 
							
										$cart_sum = 0;
										$vat = 0;
										
										foreach($this->cart_d as $prod_price){
											
											$cart_sum += $prod_price['prod_total'];
											
										}
										
							?>
                        
                        	<caption>Cart Totals</caption>
                        
                        	<tr>
                            
                            	<td>
                                
                                	Subtotal
                                
                                </td>
                            
                            	<td>
                                
                                	<?php
									
										
									
										if(isset($cart_sum)){
											
											$vat = number_format(($cart_sum * .14),2);
											echo 'R'.number_format(($cart_sum - $vat),2);
											
											
										}
									?>
                                
                                </td>
                            
                            </tr>
                            
                            <tr>
                            
                            	<td>
                                	VAT @14%
                                
                                </td>
                                
                                <td>
                                	<?php 
									
										echo 'R'.$vat;
									
									?>
                                
                                </td>
                            
                            
                            </tr>
                            
                             <tr>
                            
                            	<td>
                                	Total
                                
                                </td>
                                
                                <td>
                                	<?php
									
										echo 'R'.number_format($cart_sum,2);
									
									?>
                                
                                </td>
                            
                            
                            </tr>
                            
                            <tr>
                                
                            </tr>
                            
                            <tr>
                                <td colspan="2"><a href="<?php echo $app_path.'public/checkout/checkout'?>">
                                <button>Proceed To Checkout</button></a></td>
                            </tr>
                            
                        </table>
                
                	<?php }else{
						
						
						echo '<p class="empty-cart">'.$this->cart_d.'<br><a href=' .$app_path.$shop.
						
						'><button>Shop</button></a><p>';
						
						
					}?>
                
                </section>
                
                
                </div><!---End of cart content--->
                
                
                </article>
            
            
														
            
         </article>
    
    </div><!--End of restuarant content container--->
    
	</div>
