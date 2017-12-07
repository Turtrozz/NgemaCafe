<?php

include_once 'app/config.php';

$image_path = 'public/imgs/appproducts/p_';
$image_format ='thumb.jpg';

$categories = $this->product_data['categories'];
$product = $this->product_data['product_data'];



?>

<script type="text/javascript">



function adminEdit(adminForm){
				
				
				
				if(adminForm.product_edit != undefined || adminForm.product_edit != null){
					
					
					var alertMessage = _getId('alert-message');
						alertMessage.innerHTML = 'You are about to edit '+adminForm.product_edit_name.value+' product, continue? ';
					adminSubForm = adminForm;
					adminAlertModal.style.display = 'block';
					
					
				}else if(adminForm.product_add != undefined || adminForm.product_add != null){
					
					
					var alertMessage = _getId('alert-message');
						alertMessage.innerHTML = 'You are about to edit add a new product, continue? ';
						adminSubForm = adminForm;
						adminAlertModal.style.display = 'block';
					
					
				}else{
					
					
					var alertMessage = _getId('alert-message');
						alertMessage.innerHTML = 'You are about to delete a product from the shop, continue? ';
						adminSubForm = adminForm;
						adminAlertModal.style.display = 'block';
					
					
				}
				
			
				
				
				return false;
				
				
			}// End of form admin edit validation function
			
			
			
			
			
			
function adminAjax(editForm,editMethod){
	
	
	
	
	var dest = "";
	
	if(editMethod == 'adminEdit'){
	
		dest = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/admin_edit_product';
		
	}else if(editMethod == 'adminAdd'){
		
		dest = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/admin_add_product';
		
	}else{
		
		
		dest = 'http://localhost/Turtrozz/webApzz/cafeT/public/ajax/admin_del_product';
		
	}
	
	
	var serverDataObj = '';
	var requestObj = new XMLHttpRequest();
	sendProduct();



	
	
		
	function sendProduct(){
		
		requestObj.abort();
		requestObj.onreadystatechange = cart_response;
		requestObj.open('post',dest,false);
		requestObj.send(new FormData(editForm));
		
	}
	
	
	function cart_response(){
		
		
		if(requestObj.readyState === 4 && requestObj.status === 200){
		
			
			var jsonResponse = JSON.parse(requestObj.responseText);
			
			if(jsonResponse.type == "product update"){
				
				if(jsonResponse.json_type == 'update success'){
					
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
						
						
					
				}else{
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
					
				}
				
				
			}else if(jsonResponse.type == "product addition"){
				
				
				if(jsonResponse.json_type == 'addition success'){
					
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
						
						
					
				}else{
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
					
				}
				
				
			}else if(jsonResponse.type == "product delete"){
				
				
				if(jsonResponse.json_type == 'delete success'){
					
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
						
						
					
				}else{
					
					var updateMessage = _getId('resp-message');
						updateMessage.innerHTML = jsonResponse.message;
						adminResModal.style.display = 'block';
					
				}
				
				
			}
			
			
		}// End of state check
		
	
	
	}// End of response

}// End of remove cart product from cart summary
			







</script>


<div class="admin-wrap">

	
    <article>
        
    	
        
        	
        <section class="admin-nav">
        
        	<?php include 'app/views/helpers/admin_nav.php'; ?>
        
        </section>
        
        <section class="admin-content">
        
        	<?php include 'app/views/helpers/admin_top.php'; ?>
            
            <div class="admin-prod">
            
            	
                
                <div>

						<h1>Edit Product : <small style="color: #0CF;"><?php echo $product['productName']; ?></small></h1>
                        
                     
                     <div class="edit-form">
                     
                        
                        <form id="admin-edit-form" onsubmit="return adminEdit(this);" >
                        
							
                            <section>
                    
                            
                            <br>
                    
                    		<span>
                            <label>Code:</label>
                            <input type="text" name="product_code"
                                   value="<?php echo htmlspecialchars($product['productCode']); ?>"><br />
                            </span>
                            
                            <br>
                    	
                        	<span>
                            <label>Name:</label>
                            <input type="text" name="product_name" 
                                   value="<?php echo htmlspecialchars($product['productName']); ?>" 
                                   size="50"><br />
                             </span>
                             
                            <br>
                    
                    		<span>
                            
                            <label>List Price:</label>
                            <input type="text" name="product_price" 
                                   value="<?php echo $product['listPrice']; ?>"><br />
                              </span>
                              
                            <br>
                    		
                            <label>Product Image:</label>
                            <input type="file" name="product_image" >
                    
                    		</section>
                            
                            <section>
                    
                    		
                            <p>
                            <span>
                            <label>Description:</label>
                            <textarea name="product_description" rows="8"
                                      cols="50"><?php echo $product['description']; ?></textarea><br />
                             </span>
                                      
                             </p>
                           
                    		<p>
                            
                            <input type="hidden" name="product_edit_name" value="<?php echo $product['productName']; ?>" />
                            <input type="hidden" name="product_edit" value="edit product" />
                            <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>" />
                            <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>" />
                            <input type="submit" value="Edit Product" class="sub-buttons" />
                            
                            </p>
        
    						</form>
                            
                            </section>
                        	<strong class="clearfix"></strong>
                        
                        
                        
                        
                        
                        
                     
                     </div><!-------End of edit form div----->
                       
            	
			 
                </div><!----End of content container div--->
        
        
        </section>
    
    </article>



        
       

