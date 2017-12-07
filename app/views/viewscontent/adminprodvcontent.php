<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='thumb.jpg';


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

						<h1>Products.</h1>
                        
                        <article>
	        
            		<?php foreach($this->product_data as $data_p){ ?>
            
            			
                        
                         <section>
                         
                            <a href="<?php echo $app_path.'public/adminproddetail/adminproduct/'.$data_p['productID']; ?>">
                            
                            <p><img src="<?php echo $app_path.$image_path.$data_p['productID'].$image_format; ?>"
                            /></p>
                            
                            </a>
                        
                        </section>
                        
            		
            
            		<?php }//End of foreach loop?>
                    
                    
                    <strong class="clearfix"></strong>
                    
                    </article>
            
        
            	</div>
			 
                    
            </div>
        
        
        </section>
    
    </article>



        
       

