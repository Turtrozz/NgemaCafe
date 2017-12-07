
<?php

	include 'app/config.php';

?>

<div class="user-account">

	<h2>Login/Sign Up</h2>
    
    <section>
    
    	<h3>I'm already a member</h3>
        
        <h4>Login</h4>
        
        <form onSubmit="return cartLogAjax(this);">
        
        	<p>
            
            	<label>User Name*</label><br />
                <input type="text" name="user_log_name" placeholder="username" required="required" />
            
            </p>
            
            <p>
            
            	<label>Password*</label><br />
                <input type="password" name="user_log_pass" placeholder="password" required="required" />
               
            
            </p>
            
            <p>
            
            	<input type="submit" name="login_submit" value="Login" />
            
            </p>
        
        </form>
    
    </section>
    
    <section>
    
    	<h3>I want to be a member</h3>
        <h4>Sign Up</h4>
        
        <p>
        
        	Have access to things like order updates and personalized recommendations
        
        </p>
        
        <p><a href="<?php echo $app_path.'public/uregister/uregister'; ?>">
        <button>Create Account</button></a></p>
        
        <span></span>
    
    </section>
    
    <strong class="clearfix"></strong>
    
    

</div>