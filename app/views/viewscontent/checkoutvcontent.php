<?php include_once 'app/config.php'; ?>




<div id="wrapper">

	
    		<?php include_once 'app/views/helpers/brand.php';?>
            
            	
                    <article class="checkout-form">
                    
                    
                    	
                    
                    	<div class="checkout-container">
                    
                    		
                            <h1>Checkout</h1>
                            
                            <?php if(gettype($this->cart_d) == 'array'){ ?>
                            
                        	<article>
                            <form action="<?php echo $app_path.'public/pay/pay'; ?>" method="post">
                            
                            
                            	<h2>Billing Details</h2>
                            
                            	<section>
                                
                                	<p>
                                    
                                    <span>
                                    <label>First Name</label><br />
                                    <input type="text" name="first_name" placeholder="Name" required="required" />
                                    </span>
                                    
                                    <span>
                                   
                                    <label>Last Name</label><br />
                                    <input type="text" name="first_name" placeholder="Last Name" required="required" />
                                    
                                    </span>
                                    </p>
                                
                                </section>
                                
                                <section>
                                
                                	<p>
                                    <label>Street Address</label><br />
                                    <input type="text" name="street_house" required="required" placeholder="House Number And Street Name" />
                                    </p>
                                    
                                    <p>
                                    
                                    <input type="text" name="apart_suite" placeholder="Apartment,suite,Unit ETC(Optional)" />
                                    </p>
                                
                                </section>
                                
                                <section>
                                
                                	<p>
                                    <label>Town/City</label><br />
                                    <input type="text" name="town" required="required" />
                                    </p>
                                    
                                    <p>
                                    <label>Post Code/Zip</label><br />
                                    <input type="text" name="post_code" required="required" />
                                    </p>
                                
                                </section>
                                
                                
                                <section>
                                
                                	<p>
                                    
                                    <span>
                                    <label>Phone</label><br />
                                    <input type="tel" name="phone" />
                                    </span>
                                    
                                    <span>
                                   
                                    <label>Email Address</label><br />
                                    <input type="email" name="mail" required="required"  />
                                    
                                    </span>
                                    </p>
                                    
                                    
                                    
                                    	
                                    	<input type="checkbox" name="account_create" value="create Account"
                                         />
                                        Create account?
                                    
                                    
                                
                                </section>
                                
                                
                                
                                
                            
                            
                            </article>
                            
                            <article>
                            
                            
                            	<h2>Your Order</h2>
                                
                                
                                <?php 
							
										$cart_sum = 0;
										$vat = 0;
										
										foreach($this->cart_d as $prod_price){
											
											$cart_sum += $prod_price['prod_total'];
											
										}
										
							?>
                                
                                <table class="checkout-total-sum">
                                
                                	<thead>
                                	<tr>
                                    
                                    
                                    	<td>
                                        Product
                                        </td>
                                        
                                        <td>
                                        Total
                                        </td>
                                    
                                    </tr>
                                    
                                    </thead>
                                
                                
                                	<?php foreach($this->cart_d as $product){ ?>
                                
                                			<tr>
                                            
                                                <td>
                                                
                                                	<?php echo $product['productName'].' x '.$product['prod_quant']; ?>
                                                
                                                </td>
                                                
                                                <td>
                                                
                                                	<?php echo 'R'.$product['prod_total'] ?>
                                                
                                                </td>
                                            
                                            </tr>
                                
                                	<?php }; ?>
                                    
                                    <tr>
                                    
                                    	<td>
                                        
                                        	<b>Subtotal</b>
                                        
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
                                        
                                        	<b>Vat@14%</b>
                                        
                                        </td>
                                        
                                        <td>
                                        
                                        	<?php 
									
												echo 'R'.$vat;
											
											?>
                                        
                                        </td>
                                    
                                    </tr>
                                    
                                    
                                    <tr>
                                    
                                    	<td>
                                        
                                        	<b>Total</b>
                                        
                                        </td>
                                        
                                        <td>
                                        
                                        	<?php
											
												
									
												echo 'R'.number_format($cart_sum,2);
										
										
											
											 ?>	
                                        
                                        </td>
                                    
                                    </tr>
                                    
                                
                                </table>
                                
                                
                                <p class="returning-customer">
                                	<small>Returning customer? 
                                    <a href="<?php echo $app_path.'public/login/customerlogin' ; ?>">Click here to login
                                    </a></small>
                                </p>
                                
                                
                                <input type="hidden" name="cart_total" value="<?php echo number_format($cart_sum,2); ?>" />
                                
                                <input type="submit" value="Place Order" class="place-order" />
                            
                            </form>
                            </article>
                            
                            <strong class="clearfix"></strong>
                            
                            <?php }else{ echo '<p style="margin-top:150px;height:100vh;text-align: center;
							font-size: 2.5em;color: rgba(0,0,0,1;)">
							You must fill your cart with products to chekcout</p>'?>
                            
                            
                            	
                            
                            
                            <?php }?>
                        
                        <div>
                       
                        
                    </article>
        
       		
             
             
           

    
   		

			


