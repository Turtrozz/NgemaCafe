
<?php

	include'app/config.php';

 ?>


<nav class="registered-user-nav">


	<ul>
    
    	<li>
        
        	<a href="<?php echo $app_path.'public/uaccountset/accountset'; ?>">ACCOUNT</a>
        
        </li>
        
        
         <li>
        
        	<a href="javascript:void();" onclick="<?php if(isset($_SESSION['log_status'])){
				
				unset($_SESSION['log_status']);
				header('location: http://localhost/Turtrozz/webApzz/cafeT/public/home/defaultAction');
				
				
			}?>">Log out</b>
        >LOG OUT</a>
        
        </li>
        
    </ul>
 



</nav>