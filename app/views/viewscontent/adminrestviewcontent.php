<?php 

include_once 'app/config.php';

$image_path = 'public/imgs/apprestuarants/rest_';
$image_format ='.jpg';


?>


<div class="admin-wrap">

	
    <article>
        
    	
        
        	
        <section class="admin-nav">
        
        	<?php include 'app/views/helpers/admin_nav.php'; ?>
        
        </section>
        
        <section class="admin-content">
        
        	<?php include 'app/views/helpers/admin_top.php'; ?>
            
            <div class="admin-rest">
                
                <div>
                
                	<h1>Products By Restuarant.</h1>
                    
                    
                    <section class="admin-rest">
                    
                    	<ul>
                    
							<?php  foreach($this->rest_data as $data_r){ ?>
                            
                            
                                <li><a href="<?php 
                                    echo $app_path.'public/adminprod/adminproducts/'.$data_r['categoryID']; ?>">
                                    <?php echo $data_r['categoryName']; ?>
                                </a></li>
                                
                            
                           <?php }?>
                    
                    </ul>
                    
                    </section>
			
			
            	</div>
			
            
           
        
                    
                    
            </div>
        
        
        </section>
        
        
       
        
        	
    
    
    </article>


