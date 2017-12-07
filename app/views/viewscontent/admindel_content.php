
<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='thumb.jpg';

$categories = $this->product_data['categories'];
$product = $this->product_data['product_data'];



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

						<h1>Delete Product</h1>
                        
                     
                     <div class="edit-form">
                     
                        
                        <form onSubmit="return adminEdit(this);" id="admin-add-form">
                        
							
                            <section>
                    
                           
                            <br>
                    
                    		<span>
                           
                            <input type="hidden" name="product_code"
                                  ><br />
                                  
                             </span>
                                  
                            <br>
                    
                    		<span>
                           
                            <input type="hidden" name="product_name" 
                                   
                                   ><br />
                             </span>
                            <br>
                    
                    		<span>
                           
                            <input type="hidden" name="product_price" placeholder="Product price"
                                   ><br />
                                   
                             </span>
                            <br>
                    		
                           
                    
                    		</section>
                            
                            <section>
                    
                            <p>
                            
                            <span>
                            
                            <textarea name="product_description" rows="2" placeholder="Click The Button to delete product"
                                      cols="5" disabled="disabled" style="border:none;"></textarea><br />
                                      
                             </span>
                                      
                             </p>
                           
                    		<p>
                            
                             <input type="hidden" name="product_delete" value="delete product" />
                            <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>" />
                            <input type="submit" value="DELETE PRODUCT" class="sub-buttons" style="width:80%;" />
                            
                            </p>
        
    						</form>
                            
                            </section>
                        	<strong class="clearfix"></strong>
                        
                        
                        
                        
                        
                        
                     
                     </div><!-------End of edit form div----->
                       
            	
			 
                </div><!----End of content container div--->
        
        
        </section>
    
    </article>



        
       


       

