<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='.jpg';


?>


<div class="m-shop-content-container">


	<?php include 'app/views/helpers/brand.php'; ?>
	
    <div class="m-product-content">
    
    	<h1>Our Menu</h1>
        
        
        <article>
        
        	<?php $count=0; foreach($this->product_data as $data_p){ ?>
					
					
                    
                    <?php if($count == 0){ ?>
                    
                    <section class="animated fadeIn wow" data-wow-duration="2s">
                    
                    	<a href="<?php 
						echo $app_path.'public/productdetail/product/'.$data_p['productID']; ?>">
                    	<div class="hidden-content animated fadeIn wow">
                        
                        	<p>
                            
                            
                            	
                                <span>
                                
                                	<form onsubmit="return cartAjax(this);" class="mini-add-to-cart">
                                    
                                    	<input type="hidden" name="product_id"
                                        value="<?php echo $data_p['productID']; ?>" />
                                        
                                        <input type="hidden" name="product_price"
                                        value="<?php echo $data_p['listPrice']; ?>" />
                                        
                                        <input type="hidden" name="add_to_cart"
                                        value="addtocart" />
                                        
                                        <input type="submit" value="ADD TO CART" name="add_to_cart_sub" />
                                    
                                    </form>
                                    
                                    <form action="<?php echo $app_path.'public/cart/cart' ?>" class="mini-view-cart"
                                     method="post">
                                    
                                    	<input type="hidden" name="view_cart"
                                        value="cart view" />
                                        
                                        <input type="submit" value="VIEW CART" name="cart_view_sub" />
                                    
                                    </form><br />
                                    
                                    <button class="quick-view">Quick View</button>
                                    
                                    <strong class="clearfix"></strong>
                                    
                                    </span>
                                    
                                
                                
                                
                               
                            
                            </p>
                        
                        </div>
                        </a>
                    
						
                        <p><img src="<?php echo $app_path.$image_path.$data_p['productID'].$image_format; ?>"
                        /></p>
                        
                        
                        
                        
                        	<h2>
                            	<a href="<?php echo $app_path.'public/productdetail/product/'.$data_p['productID']; ?>">
									<?php echo $data_p['productName']; ?>
                                </a>
                            </h2>
             
                            <h3>R<?php echo $data_p['listPrice']; ?></h3>
                        
                        
                        	
                    
                    </section>
                    
                    
                    
                    
                    <?php }elseif($count == 1){ ?>
					
                    	<section class="animated fadeIn wow"
                        data-wow-duration="3s" data-wow-delay="2s">
                    
                    		<a href="<?php 
						echo $app_path.'public/productdetail/product/'.$data_p['productID']; ?>">
                    	<div class="hidden-content animated fadeIn wow">
                        
                        	<p>
                            
                            
                            	
                                <span>
                                
                                	<form onsubmit="return cartAjax(this);" class="mini-add-to-cart">
                                    
                                    	<input type="hidden" name="product_id"
                                        value="<?php echo $data_p['productID']; ?>" />
                                        
                                        <input type="hidden" name="product_price"
                                        value="<?php echo $data_p['listPrice']; ?>" />
                                        
                                        <input type="hidden" name="add_to_cart"
                                        value="addtocart" />
                                        
                                        <input type="submit" value="ADD TO CART" name="add_to_cart_sub" />
                                    
                                    </form>
                                    
                                    <form action="<?php echo $app_path.'public/cart/cart' ?>" class="mini-view-cart"
                                      method="post">
                                    
                                    	<input type="hidden" name="view_cart"
                                        value="cart view" />
                                        
                                        <input type="submit" value="VIEW CART" name="cart_view_sub" />
                                    
                                    </form><br />
                                    
                                    <button class="quick-view">Quick View</button>
                                    
                                    <strong class="clearfix"></strong>
                                    
                                    </span>
                                    
                                
                                
                                
                               
                            
                            </p>
                        
                        </div>
                        </a>
                    
						
                        <p><img src="<?php echo $app_path.$image_path.$data_p['productID'].$image_format; ?>"
                        /></p>
                        
                        
                        
                        
                        	<h2>
                            	<a href="<?php echo $app_path.'public/productdetail/product/'.$data_p['productID']; ?>">
									<?php echo $data_p['productName']; ?>
                                </a>
                            </h2>
             
                            <h3>R<?php echo $data_p['listPrice']; ?></h3>
                    
                    </section>
                    
                    
                    <?php }else{?>
					
                    	<section class="animated fadeIn wow"
                        data-wow-duration="3s" data-wow-delay="2s">
                    
                    		<a href="<?php 
						echo $app_path.'public/productdetail/product/'.$data_p['productID']; ?>">
                    	<div class="hidden-content animated fadeIn wow">
                        
                        	<p>
                            
                            
                            	
                                <span>
                                
                                	<form onsubmit="return cartAjax(this);" class="mini-add-to-cart">
                                    
                                    	<input type="hidden" name="product_id"
                                        value="<?php echo $data_p['productID']; ?>" />
                                        
                                        <input type="hidden" name="product_price"
                                        value="<?php echo $data_p['listPrice']; ?>" />
                                        
                                        <input type="hidden" name="add_to_cart"
                                        value="addtocart" />
                                        
                                        <input type="submit" value="ADD TO CART" name="add_to_cart_sub" />
                                    
                                    </form>
                                    
                                    <form action="<?php echo $app_path.'public/cart/cart' ?>" class="mini-view-cart"
                                     method="post">
                                    
                                    	<input type="hidden" name="view_cart"
                                        value="cart view" />
                                        
                                        <input type="submit" value="VIEW CART" name="cart_view_sub" />
                                    
                                    </form><br />
                                    
                                    <button class="quick-view" >Quick View</button>
                                    
                                    <strong class="clearfix"></strong>
                                    
                                    </span>
                                    
                                
                                
                                
                               
                            
                            </p>
                        
                        </div>
                        </a>
                    
						
                        <p><img src="<?php echo $app_path.$image_path.$data_p['productID'].$image_format; ?>"
                        /></p>
                        
                        
                        
                        
                        	<h2>
                            	<a href="<?php echo $app_path.'public/productdetail/product/'.$data_p['productID']; ?>">
									<?php echo $data_p['productName']; ?>
                                </a>
                            </h2>
             
                            <h3>R<?php echo $data_p['listPrice']; ?></h3>
                    
                    </section>
                    	
				
                    	
				
                	<?php }?>
			
			
			<?php  $count++; }//End of foreach loop?>
            
            <strong class="clearfix"></strong>
        
        
        </article>
    
    </div><!--End of restuarant content container--->
    
	</div>



