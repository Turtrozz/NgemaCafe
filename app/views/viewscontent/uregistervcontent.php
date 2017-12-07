<?php include_once 'app/config.php'; ?>




<div id="wrapper">

	
    		<?php include_once 'app/views/helpers/brand.php';?>
            
            	
                    <article class="user-registration">
                    
                    
                    	<h1>Create An Account For Enhanced Shopping Experience.</h1>
                    
                    	<div>
                    
                    		<small>Create an account to get access to features such as order updates and delivery,
                                   personalized reccomendations, and wishlist items management </small>
                    		
                        
                            <form id="sign-up-form" onSubmit="return formFinalValidation(this);">
                            
                                <p class="animated slideInRight wow">
                                
                                    <input type="text" name="user_r_mail" placeholder="example@email.com" />
                                	<br />
                                </p>
                            
                                <p class="animated slideInLeft wow">
                                
                                    <input type="password" name="user_r_pass" placeholder="password"  />
                                    <br />
                                
                                </p>
                                
                                <p class="animated slideInRight wow">
                                
                                    <input type="text" name="user_r_fname" placeholder="First Name" />
                                    <br />
                                
                                </p>
                            
                            
                                 <p class="animated slideInLeft wow">
                                
                                    <input type="text" name="user_r_lname" placeholder="Last Name" />
                                    <br />
                                
                                </p>
                                
                                
                                
                                <p>
                                
                                    <select name="province">
                                    
                                    	<option value="province">Province</option>
                                        <option value="gauteng">Gauteng</option>
                                        <option value="free state">Free State</option>
                                        <option value="limpopo">Limpopo</option>
                                        <option value="kwazulu">Kwazulu Natal</option>
                                        <option value="north west">North West</option>
                                        <option value="mpumalange">Mpumalanga</option>
                                        <option value="eastern cape">Eastern Cape</option>
                                        <option value="western cape">Western Cape</option>
                                        <option value="Limpopo">Limpopo</option>
                                    
                                    </select>
                                
                                </p>
                                
                                
                                
                                
                                 <p>
                                
                                    <input type="checkbox" name="user_r_sub" value="newsletter" />Sign up for latest on our store
                                
                                </p>
                                
                                
                                <p>
                                
                                    <small>By creating an account, you agree to our store's privacy and terms of use policy</small>
                                
                                </p>
                                
                                 <p>
                                
                                	<input type="hidden" name="user_reg_data" value="register" />
                                    <input type="submit" name="userSub" value="Create Account" /><br />
                                    
                                    <span>
                                    
                                    Already a member? <a href="<?php echo $app_path.'public/login/customerlogin'?>">Sign in</a>
                                    
                                    </span>
                                
                                </p>
                            
                            </form>
                        
                        <div>
                       
                        
                    </article>
        
       		
             
             
           

    
   		

			


