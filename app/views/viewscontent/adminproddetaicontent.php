<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='.jpg';
$image_size = 'big';


?>



<div class="admin-wrap">

	
    <article>
        
        
        
    	
        	
        <section class="admin-nav">
        
        	<?php include 'app/views/helpers/admin_nav.php'; ?>
        
        </section>
        
        <section class="admin-content">
        
        	<?php include 'app/views/helpers/admin_top.php'; ?>
            
            <div class="admin-prod">
            
            	
                
                <div>
                
                
        
                <div class="product-graphic">
                
                    <p><img src="
                        <?php echo $app_path.$image_path.$this->product_info_data['productID'].$image_format; ?>"
                       class="animated fadeIn wow" data-wow-duration="2s" />
                    </p>
                
                </div>
                
                
                	
                    <p>
                    
                        <span><?php echo $this->product_info_data['productName']; ?></span>
                    
                    </p>
                    
                    <p style="width: 90%;">
                    
                        <?php echo $this->product_info_data['description']; ?>
                    
                    </p>
                    
                    <p>
                    
                        <?php echo 'R'.$this->product_info_data['listPrice']; ?>
                        
                        
                    
                    </p>
                    
                    
                    <p class="actions-buttons">
                    
                        <a href="<?php echo $app_path.'public/adminedit/edit_view/'.$this->product_info_data['productID']; ?>">
                        
                        	<button class="buttons">Edit Product</button>
                        
                        </a>
                        
                        <a href="<?php echo $app_path.'public/admindel/del_view/'.$this->product_info_data['productID'];?>">
                        
                        
                        
                        	
                        		<button class="buttons">Delete Product</button>
                                
                            
                        
                        </a>
                        
                        <a href="<?php echo $app_path.'public/adminadd/add_view/'.$this->product_info_data['productID']; ?>">
                        
                        	<button class="buttons">Add New Product</button>
                        
                        </a>
                    
                    </p>
                    
                   
                    
                    
    
    
    
    
    
    </div>
			 
                    
            </div>
        
        
        </section>
    
    </article>
