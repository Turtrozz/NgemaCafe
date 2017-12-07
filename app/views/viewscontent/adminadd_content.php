
<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='thumb.jpg';

$categories = $this->product_data['categories'];




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

						<h1>Add Product</h1>
                        
                     
                     <div class="edit-form">
                     
                        
                        <form onSubmit="return adminEdit(this);" id="admin-add-form">
                        
							
                            <section>
                    
                            <label>Category:</label>
                            <select name="product_category">
                            
								<?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo $category['categoryID']; ?>"<?php
                                              ?>>
                                        <?php echo htmlspecialchars($category['categoryName']); ?>
                                    </option>
                                <?php endforeach; ?>
                            
                            </select>
                            <br>
                    
                    		<span>
                            <label>Code:</label>
                            <input type="text" name="product_code"
                                  ><br />
                                  
                             </span>
                                  
                            <br>
                    
                    		<span>
                            <label>Name:</label>
                            <input type="text" name="product_name" 
                                   
                                   ><br />
                             </span>
                            <br>
                    
                    		<span>
                            <label>List Price:</label>
                            <input type="text" name="product_price" placeholder="Product price"
                                   ><br />
                                   
                             </span>
                            <br>
                    		
                            <label>Product Image:</label>
                            <input type="file" name="product_image" placeholder="upload product image" >
                    
                    		</section>
                            
                            <section>
                    
                            <p>
                            
                            <span>
                            <label>Description:</label>
                            <textarea name="product_description" rows="8" placeholder="Type product description"
                                      cols="50"></textarea><br />
                                      
                             </span>
                                      
                             </p>
                           
                    		<p>
                            
                            <input type="hidden" name="product_add" value="add product" />
                            <input type="submit" value="Add Product" class="sub-buttons" />
                            
                            </p>
        
    						</form>
                            
                            </section>
                        	<strong class="clearfix"></strong>
                        
                        
                        
                        
                        
                        
                     
                     </div><!-------End of edit form div----->
                       
            	
			 
                </div><!----End of content container div--->
        
        
        </section>
    
    </article>



        
       

