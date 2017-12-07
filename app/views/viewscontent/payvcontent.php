<?php include_once 'app/config.php'; ?>




<div id="wrapper">

	
    		<?php include_once 'app/views/helpers/brand.php';?>
            
            	
                    <article class="checkout-form">
                    
                    
                    	
                    
                    	<div class="checkout-container" style="height:auto;">
                    
                    		
                            <h1>Payment Processing</h1>
                            
                            
                            
                        	<article style="width: 50%; margin:0 auto; float: none; margin-bottom: 100px;">
                            
                            <form action="<?php echo $app_path.'public/order/order' ?>" method="post" id="pay-form" >
                            
                            
                            
                            	<section>
                                
                                	<p>
                                    
                                    
                                    <label>Card Number <b style="color: #F00;">*</b></label><br />
                                    <input type="text" name="card_number" required="required"/><br />
                                   
                                  
                                    </p>
                                
                                </section>
                                
                                <section>
                                
                                	<p>
                                    <label>Expiry Month <b style="color:#F00;">*</b></label><br />
                                    <input type="month" name="exp_month" required="required" />
                                    </p>
                                    
                                    <p>
                                    
                                    <label>Expiry Year <b style="color:#F00;">*</b></label><br />
                                    <input type="date" name="exp_month" required="required" />
                                    </p>
                                
                                </section>
                                
                                <section>
                                
                                	<p>
                                    <label>Card Holder <b style="color:#F00;">*</b></label><br />
                                    <input type="text" name="town" required="required" />
                                    </p>
                                    
                                    <p>
                                    <label>CVV Number <b style="color:#F00;">*</b></label><br />
                                    <input type="text" name="cvv_number" /><br />
                                    </p>
                                
                                </section>
                                
                                
                                <input type="submit" value="Make Payment Now" class="place-order" />
                                
                                </form>
                               
                            
                            </article>
                            
                           
                                
                                
                                
                        
                        <div>
                       
                        
                    </article>
        
       		
             
             
           

    
   		

			


