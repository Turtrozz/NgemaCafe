<?php 

include_once 'app/config.php';

$image_path = 'public/imgs/apprestuarants/rest_';
$image_format ='.jpg';


?>


<div class="m-shop-content-container">


	<?php include 'app/views/helpers/brand.php'; ?>
	
    <div class="m-shop-content">
    
    	<h1>Our Food Restuarants</h1>
        
        
        <article>
        
        	<?php $count=0; foreach($this->rest_data as $data_r){ ?>
					
					
                    
                    <?php if($count == 0){ ?>
                    
                    <section class="animated zoomIn wow" data-wow-duration="2s">
                    
                    	<a href="<?php 
						echo $app_path.'public/productlist/products/'.$data_r['categoryID']; ?>">
                    	<div class="hidden-content animated fadeIn wow">
                        
                        	<p>
                            
                            
                            	<span><?php echo $data_r['categoryName']; ?></span>
                                <small>
                                
                                	Explore our menu
                                
                                </small>
                                <b class="animated rollIn "> &there4;</b>
                            
                            </p>
                        
                        </div>
                        </a>
                    
						
                        <p><img src="<?php echo $app_path.$image_path.$data_r['categoryID'].$image_format; ?>"
                        /></p>
                        
                        
                        	
                    
                    </section>
                    
                    <?php }elseif($count == 1){ ?>
					
                    	<section class="animated zoomIn wow"
                        data-wow-duration="3s" data-wow-delay="3s">
                    
                    		<a href="<?php 
						echo $app_path.'public/productlist/products/'.$data_r['categoryID']; ?>">
                        
                        	<div class="hidden-content animated fadeIn wow">
                       
                                <p>
                                
                                   <span><?php echo $data_r['categoryName']; ?></span>
                                    <small>
                                
                                	Explore our menu
                                
                                    </small>
                                    <b class="animated rollIn "> &there4;</b>
                                    
                                </p>
                            
                        	</div>
                            
                            </a>
                    
						
                        <p><img src="<?php echo $app_path.$image_path.$data_r['categoryID'].$image_format; ?>" /></p>
                    
                    </section>
                    
                    
                    <?php }else{?>
					
                    	<section class="animated zoomIn wow"
                        data-wow-duration="3s" data-wow-delay="3s">
                    
                    		<a href="<?php 
						echo $app_path.'public/productlist/products/'.$data_r['categoryID']; ?>">
                    		<div class="hidden-content animated fadeIn wow">
                        
                        	<p>
                            
                            	<span><?php echo $data_r['categoryName']; ?></span>
                                 <small>
                                
                                	Explore our menu
                                
                                </small>
                                <b class="animated rollIn "> &there4;</b>
                            
                            </p>
                        
                        	</div>
                        </a>
                    
                    
						
                        <p><img src="<?php echo $app_path.$image_path.$data_r['categoryID'].$image_format; ?>" /></p>
                    
                    </section>
                    	
				
                    	
				
                	<?php }?>
			
			
			<?php  $count++; }//End of foreach loop?>
            
            <strong class="clearfix"></strong>
        
        
        </article>
    
    </div><!--End of restuarant content container--->
    
	</div>


