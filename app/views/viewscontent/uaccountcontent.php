<?php include_once 'app/config.php'; ?>


<div class="m-shop-content-container">

	<?php include_once 'app/views/helpers/brand.php';?>

 <div class="m-shop-content">
 
 
	<div class="uaccount-content">
   
    		
            
           <article class="uaccount-nav-content">
           
           
           		<section>
                
                	<h3><?php echo $_SESSION['user_log_name'].' '.$_SESSION['user_log_lname']; ?></h3>
                	<?php include_once 'app/views/helpers/uaccount_nav.php';?>
                
                </section>
           
           </article><!---End of user account navigation menu content container--->
           
           
           
           <article class="uaccount-settings-content">
           
           		<div>
                
                	<h3>
                    	Manage Your Account
                    
                    </h3>
                    
                    <p>
                    	<b><img src="<?php echo $app_path.'public/imgs/appshopping/settings.png'; ?>" /></b>
                    	<b>Manage your account and related settings.</b>
                        
                    </p>
                
                </div>
                
               
           
           </article><!---End of uaccount settings content container--->
           <strong class="clearfix"></strong>
            
           
             
             
     </div><!---End of user account content---->
             
             
    </div><!--End of restuarant content container--->
    
	</div>
       
           

    
   		

			


