<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='.jpg';
$image_size = 'big';


?>


<div class="m-shop-content-container">


	<?php include 'app/views/helpers/brand.php'; ?>
	
    <div class="m-product-content">
    
    	
        
        
        <article class="product-details">
        
        	<div class="product-graphic">
        	
        		<p><img src="
					<?php echo $app_path.$image_path.$this->product_info_data['productID'].$image_size.$image_format; ?>"
                   class="animated fadeIn wow" data-wow-duration="2s" />
                </p>
            
            </div>
            
            <div class="product-info">
            
            
            	<section>
            	<p>
                
                	<span><?php echo $this->product_info_data['productName']; ?></span>
                
                </p>
                
                <p>
                
                	<?php echo $this->product_info_data['description']; ?>
                
                </p>
                
                <p>
                
                	<?php echo 'R'.$this->product_info_data['listPrice']; ?>
                
                </p>
                </section>
                
                <section>
                
                	<form class="animated fadeIn wow" data-wow-delay="2s" onsubmit="return validateUpdateInput(this);">
                    
                    	<input type="number" name="cart_quant" placeholder="1" />
                        <input type="hidden" name="add_to_cart" value="add to cart" />
                         <input type="hidden" name="product_price" value="<?php echo $this->product_info_data['listPrice']; ?>" />    
                        <input type="hidden" name="product_id" value="<?php echo $this->product_info_data['productID']; ?>" />
                        <input type="submit" name="product_detail_cart_but" value="Add To Cart" />
                    	
                    
                    </form>
                
                </section>
            
            </div>
            
            <strong class="clearfix"></strong>
        
        </article>
    
    </div><!--End of restuarant content container--->
    
	</div>
