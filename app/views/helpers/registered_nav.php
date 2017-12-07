
<?php

	include'app/config.php';

 ?>


<nav class="registered-user-nav">


	<ul>
    
    	<li>
        
        	<a href="#">Wishlist</a>
        
        </li>
        
        
         <li>
        
   
        	<a href="<?php echo $app_path.'public/uaccount/customeraccount'; ?>">Account Settings</a>
        
        </li>
        
        <li>
        
        	<a href="#" onclick="<?php 
			
			
				if(isset($_SESSION['log_status'])){
					
					unset($_SESSION['log_status']);
				}
			
			?>">Log out</a>
        
        </li>
    
    </ul>
 



</nav>