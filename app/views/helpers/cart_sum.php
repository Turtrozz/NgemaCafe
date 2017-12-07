<?php

	include 'app/config.php';

?>

<div class="cart-sum animated fadeIn wow">



	<div>

        <section class="cart-sum-graphic">
        
            <p>
                <a href="#">
                <img src="<?php echo $app_path.'public/imgs/appproducts/p_1thumb.jpg' ?>" />
                </a>
            
            </p>
        
        </section>
        
        
        <section class="cart-sum-content">
        
            
            <b>
            
                <form>
                
                    <input type="hidden"  />
                    <input type="submit" value="x" />
                
                </form>
            
            </b>
            
            <b>
                <a href="#">Lemon-Cookies</a>
            </b>
            
            <b>
            
                1 x R11.00
                
            </b>
        
        </section>
        <strong class="clearfix"></strong>
        
        <div id="cart-view-check-content">
        
        
        	<section>
            
            	<form onsubmit="return cartAjax(this);">
                
                    <input type="hidden" value="viewcart"  />
                    <input type="submit" value="View Cart" />
                
                </form>
            
            </section>
            
            <section>
            
            	<form onsubmit="return false">
                
                    <input type="hidden" value="checkout"  />
                    <input type="submit" value="Checkout" />
                
                </form>
            
            
            </section>
            <strong class="clearfix"></strong>
        
        </div>
        
        



	</div>





</div>