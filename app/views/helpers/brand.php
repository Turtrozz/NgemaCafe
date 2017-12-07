
<?php include'app/config.php'; ?>



<header>


	<article>
    
    
            <section>
            
            	<ul>
                
                	<li><a href="https://www.facebook.com/Ngema-Cafe-272369376586425">
                    
                    	<img src="<?php echo $app_path.'public/imgs/appsocial/facebook.png'; ?>" width="60" height="60"
                         alt="Facebook logo" title="Face-book us" />
                    
                    </a></li>
                    
                    <li><a href="https://twitter.com/ngemacafe">
                    
                    	<img src="<?php echo $app_path.'public/imgs/appsocial/twitter.png'; ?>" width="60" height="60"
                         alt="Twitter logo" title="Follow us" />
                    
                    </a></li>
                    
                    <li><a href="https://plus.google.com/118264536753622119145">
                    
                    	<img src="<?php echo $app_path.'public/imgs/appsocial/gplus.png'; ?>" width="60" height="60"
                         alt="Google plus logo" title="Add us to your circle" />
                    
                    </a></li>
                    
                    <li><a href="https://www.instagram.com/ngemacafe/">
                    
                    	<img src="<?php echo $app_path.'public/imgs/appsocial/instagram.png'; ?>" width="60" height="60"
                         alt="Instagram logo" title="Stay updated" />
                    
                    </a></li>
                    
                    <li><a href="https://www.linkedin.com/in/ngema-cafe-646bb514b/">
                    
                    	<img src="<?php echo $app_path.'public/imgs/appsocial/linkedin.png'; ?>" width="60" height="60"
                         alt="Linkedin logo" title="Check our profile" />
                    
                    </a></li>
                
                </ul>
            
            </section>
            
            	
            
            <section>
            
            
            	<p>
                
                	<a href="">
                    
                    	<img src="<?php echo $app_path.'public/imgs/restLogo.png'; ?>" />
                    
                    </a>
                
                </p>
            
            </section>
            
            
            	
            <section>
            
            	<ul>
        
                <li><a href="#">
                    <img src="<?php echo $app_path.'public/imgs/appshopping/search.png'; ?>" 
                    width="60" height="60" alt="Search Icon" title="Search our food database"/></a>
                    
                    <?php include 'searchstore.php'; ?>
                    
                    </li>
                
                <li><a href="#">
                    <img src="<?php echo $app_path.'public/imgs/appshopping/wish.png'; ?>" 
                    width="60" height="60" alt="Favourties icon" title="Add favorites icons"/>
                    
                    <span id="wish-count">0</span>
                     <?php include 'wish_sum.php' ?>
                
                </a></li>
                
                <li id="display-cart"><a href="#">
                    <img src="<?php echo $app_path.'public/imgs/appshopping/shopping-cart.png'; ?>" 
                    width="60" height="60" alt="Shopping cart icon" title="View your shopping cart"/>
                    
                    <span id="cart-count"></span>
                    
                
                </a><div id="cart-sum"></div>
                </li>
                
                <li><a href="javascript:void();">
                    <img src="<?php 
					
					if(isset($_SESSION['log_status'])){
						
						echo $app_path.'public/imgs/customers/customerDefault/blank_user.jpg';
						
					}else{
						
						echo $app_path.'public/imgs/appshopping/user-account.png';
					
					}?>"
                     
                    width="<?php if(isset($_SESSION['log_status'])){
						echo '40';
					}else{
					
						echo '60';
						
					}
					 ?>" height="<?php if(isset($_SESSION['log_status'])){
						echo '40';
					}else{
					
						echo '60';
						
					}
					 ?>"  alt="User account icon" title="Account management" style="
						 <?php if(isset($_SESSION['log_status'])){
                            echo 'border-radius:40px; margin-bottom: 10px; margin-top: 10px;';
                        }else{
                        
                             echo 'border-radius:0;';
                            
                        }
                         ?>"/>
                
                </a>
                
                    <?php 
					
						if(isset($_SESSION['log_status'])){
							include 'registered_nav.php';
						}else{
							
							include 'user.php';
							
						}
					
					
					?>
                
                </li>
                
                <li>
                
                    <a href="#">
                    <img src="<?php echo $app_path.'public/imgs/appshopping/menu.png'; ?>" 
                    width="60" height="60" alt="Menu icon" title="View menu"/>
                
                </a>
                
                    <?php include 'nav.php'; ?>
                    
                </li>
                
                
           </ul>
    	
            
            
            </section>
            
            <strong class="clearfix"></strong>
        
        
        
        
    </article>

	<span class="header-underliner"></span>
	
</header>


<?php

	

?>