<?php include_once 'app/config.php'; if(session_status()== PHP_SESSION_NONE){session_start();} ?>

<?php if(isset($_SESSION['ngema_cart'])){
	
	unset($_SESSION['ngema_cart']);

}

?>


<div id="wrapper">

	
    		<?php include_once 'app/views/helpers/brand.php';?>
            
            	
                    <article class="checkout-form">
                    
                    
                    	
                    
                    	<div class="checkout-container" style="height:100vh;">
                    
                    		
                            <h2 style="padding:0;margin:0 auto; width: 50%; 
                            margin-bottom:30px; margin-top: 30px;font-size: 2em;">Order Summary</h2>
                            
                            <h3 style="width:50%;margin:0 auto; 
                            margin-bottom: 30px;">Thanks For the purchase!</h3>
                            
                        	<article style="width: 50%; margin:0 auto; float: none; margin-bottom: 100px;">
                            
                            
                            	
                            	
                                
                                	<p>Order <b>#</b><?php $rand = mt_rand(1,50); echo $rand.'00'; ?></p>
                                    
                                    <p>Your Order has been received in good hands!</p>
                                    <p>An order email has been sent.</p>
                                
                               
                            
                            </article>
                            
                           
                                
                                
                                
                        
                        <div>
                       
                        
                    </article>
        
       		
             
             
           

    
   		

			


