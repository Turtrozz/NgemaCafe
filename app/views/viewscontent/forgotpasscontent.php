<div id="wrapper">

	
    		<?php include_once 'app/views/helpers/brand.php';?>
            
            	
                    <article class="user-alt-login">
                    
                    
                    
                    	
                        
                    	<h1>Password Reset</h1>
                    
                    	<div>
                    
                        
                            <form id="pass-forgot-form" onSubmit="return forgotvalidate(this);">
                            
                                <p class="animated slideInRight wow">
                                
                                    <input type="text" name="user_log_mail" placeholder="example@email.com" />
                                	<br />
                                </p>
                                
                              
                                 <p>
                                
                                	<input type="hidden" name="user_forgot_pass" value="login" />
                                    <input type="submit" name="logSub" value="Reset Password" /><br />
                                    
                                   
                                </p>
                            
                            </form>
                            
                            <section>
                            
                            
                            	<ul>
                                
                                	<li><a href="<?php echo $app_path.'public/uregister/uregister'; ?>">Create Account</a></li>
                                    <li><a href="<?php echo $app_path.'public/home'; ?>">Return to Store</a></li>
                                    <li><a href="<?php echo $app_path.'public/login/customerlogin'; ?>">Sign in</a></li>
                                
                                </ul>
                            
                            </section>
                        
                        <div>
                       
                        
                        
                        
                    </article>
        
       		