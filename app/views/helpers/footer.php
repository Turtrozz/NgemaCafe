<?php require_once 'app/config.php'; ?>





</div><!----End of page full background image overlay content---->



</div><!---End of full background content container------>

<footer>

	
    <article>
	
        <section>
        
            <p>&copy; All rights reserved 2017. Cafe foodz &reg;</p>
            
        </section>
        
        <section>
        
            
            
        </section>

</article>        
        
        

</footer>


</div><!---End of wrapper--->
 
<!--===================Cart Modal Response==========================--->
 
 <div id="cart-action-response" class="animated fadeIn wow">
 
 
 	<div class="cart-action-content">
    
    
    
    	<section class="cart-action-head">
        
        	<p class="close-cart">X</p>
        
        </section>
        
        <section class="cart-action-body">
        
        	<div class="cart-product-details">
            
            	<article class="cart-product-message">
                
                	<section>
                    
                    	<b><span>X<span></b>
                    
                    </section>
                    
                    <section>
                    
                    	<p id="prod-message">
                        	Product has been succesfully added to your cart
                        
                        </p>
                    
                    </section>
                    
                    <strong class="clearfix"></strong>
                
                </article>
                
                	
                
                <article class="cart-product-details">
                
                	<section>
                    
                    	<p>
                        
                        	<img id="product-image"
                             alt="Added product" width="200" height="133" />
                        
                        </p>
                    
                    </section>
                    
                    <section>
                    
                    	<p>
                        
                        	<b id="product-name">Lemon-Cookies</b>
                            <b id="product-price">R11.99</b>
                        
                        </p>
                        
                        <p>
                        
                        	<span>
                            	Quantity: x<span id="product-quantity">5</span>
                            </span>
                        
                        </p>
                    
                    </section>
                    
                    <strong class="clearfix"></strong>
                
                <article>
                
                
            
            
            </div><!---End of cart product details-->
            
            <div class="cart-products-summary">
            
            
            	<section>
                
                	<h3 id="cart-items">There is 1 item in your cart</h3>	
                
                </section>
                
                <section>
                
                	<p id="cart-total">R300.00</p>
                
                </section>
                
                	
                
                <section>
                
                	<button class="continue-shop">Continue Shopping</button>
                    <a href="<?php echo $app_path.'public/checkout/checkout' ; ?>">
                    	<button>Proceed to Checkout</button>
                    </a>
                
                	<p>The auto pop will dismiss in <b>15</b> seconds, now <span id="count-down">13</span>s left</p>
                
                </section>
             
            
            </div><!---End of cart product details-->
            
            <strong class="clearfix"></strong>
            
            
        
        </section><!---End of cart body box--->
        
        
        
        
        
    </div><!---End of cart content container--->
 
 
 </div><!---End of cart modal--->
 
 
 <!---=================Cart summary Update confirm modal============================-->
 
 
 <div id="confirmsum-cart-update">
 
 
 	<div class="confirmsum-content">
    
    	<section class="confirmsum-cart-head">
        
        	<p class="close-confirm"><span>X</span></p>
        </section>
        
        <section class="confirmsum-cart-body">
        
        	<p>You are about to remove product from your cart, continue?</p>
        
        </section>
        
        <section class="confirmsum-cart-foot">
        
        	<p>
            
            	<button class="update-confirm">Yes</button>
                <button class="cancel-confirm">No</button>
            
            </p>
        
        </section>
    	
    
    </div>
 
 </div><!---End of confirm cart update modal---->
 
 
  <div id="confirm-cart-update">
 
 
 	<div class="confirm-content">
    
    	<section class="confirm-cart-head">
        
        	<p class="close-confirm"><span>X</span></p>
        </section>
        
        <section class="confirm-cart-body">
        
        	<p>You are about to update your cart. Are you sure you want to continue?</p>
        
        </section>
        
        <section class="confirm-cart-foot">
        
        	<p>
            
            	<button class="update-confirm">Update Cart</button>
                <button class="cancel-confirm">Cancel Update</button>
            
            </p>
        
        </section>
    	
    
    </div>
 
 </div><!---End of confirm cart update modal---->



<!---======================Cart Summary update user Notify==================--->
    
  <div id="confirmnotify-cart-update">
 
 
 	<div class="confirm-content">
    
    	
        
        <section class="confirm-cart-body">
        
        	<p>Product removed from the cart</p>
        
        </section>
        
        <section class="confirm-cart-foot">
        
        	<p>
            
            	
                <button class="cancel-confirm">Close</button>
            
            </p>
        
        </section>
    	
    
    </div>
 
 </div><!---End of confirm cart Notify modal---->




<!---======================Auto login user Modal==================--->



<div id="auto-log-user">
 
 
 	<div class="auto-log-content">
    
    	<section class="auto-log-head">
        
        	<p class="close-confirm"><span>X</span></p>
        </section>
        
        <section class="auto-log-body">
        
        	<p id="check-sign"><b><span>X<span></b></p>
            <p id="log-alert"></p>
            <P id="welcome"><small>Welcome to Ngema Cafe. A confirmation email is on its way.</small></P>
        
        </section>
        
        <section class="auto-log-foot">
        
        	<p>
            
            	<button class="auto-log">CONTINUE</button>
                
            
            </p>
        
        </section>
    	
    
    </div>
 
 </div><!---End of conitune auto login modal---->
   
   
 <!---======================Image upload Modal==================--->



<div id="upload-profile-image">
 
 
 	<div class="auto-log-content">
    
    	<section class="auto-log-head">
        
        	<p class="close-confirm"><span>X</span></p>
        </section>
        
        <section class="auto-log-body">
        
        	<form onsubmit="return false">
            
            	<p>
                	<input type="file" name="user_profile_pic" size="30"/>
                </p>
                <p>
                	<input type="submit" value="upload" class="upload-img" />
                </p>
            
            </form>
        
        </section>
        
        <section class="auto-log-foot">
        
        	<p>
            
            	<button class="auto-log">CANCEL</button>
                
            
            </p>
        
        </section>
    	
    
    </div>
 
 </div><!---End of conitune auto login modal---->
 
 
 
 <div id="deactivation-confirm">
 
 
 	<div class="confirm-content">
    
    	<section class="confirm-cart-head">
        
        	<p class="close-confirm"><span>X</span></p>
        </section>
        
        <section class="confirm-cart-body">
        
        	<p><b style="color:#F00;">Alert!</b>, Your are about to delete your account with our shop.
             Are you sure this is what you want?</p>
        
        </section>
        
        <section class="confirm-cart-foot">
        
        	<p>
            
            	<button class="update-confirm">Yes,Deactivate</button>
                <button class="cancel-confirm">No,Cancel</button>
            
            </p>
        
        </section>
    	
    
    </div>
 
 </div><!---End of confirm cart update modal---->


<script src="<?php echo $app_path.'public/js/vendor/wow.js'; ?>"></script>
<script src="<?php echo $app_path.'public/js/user.js'; ?>"></script>
<script src="<?php echo $app_path.'public/js/login.js'; ?>"></script>
<script src="<?php echo $app_path.'public/js/ajax.js'; ?>"></script>
<script src="<?php echo $app_path.'public/js/custom.js'; ?>"></script>

</body>

</html>