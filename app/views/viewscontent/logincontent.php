<div id="wrapper">

	
    		<?php include_once 'app/views/helpers/brand.php';?>
            
            	
                    <article class="user-alt-login">
                    
                    
                    
                    	
                        
                    	<h1>Login</h1>
                    
                    	<div>
                    
                        
                            <form id="user_login_form" onSubmit="return cartLogAjax(this);">
                            
                                <p class="animated slideInRight wow">
                                
                                    <input type="text" name="user_log_mail" placeholder="example@email.com" />
                                	<br />
                                </p>
                            
                                <p class="animated slideInLeft wow">
                                
                                    <input type="password" name="user_log_pass" placeholder="password"  />
                                    <br />
                                
                                </p>
                                
                              
                                 <p>
                                
                                	<input type="hidden" name="user_log_data" value="login" />
                                    <input type="submit" name="logSub" value="Log In" /><br />
                                    
                                   
                                </p>
                            
                            </form>
                            
                            <section>
                            
                            
                            	<ul>
                                
                                	<li><a href="<?php echo $app_path.'public/uregister/uregister'; ?>">Create Account</a></li>
                                    <li><a href="<?php echo $app_path.'public/home'; ?>">Return to Store</a></li>
                                    <li><a href="<?php echo $app_path.'public/forgotpass/passwordreset'; ?>">Forgot Your Password?</a></li>
                                
                                </ul>
                            
                            </section>
                        
                        <div>
                       
                        
                        
                        
                    </article>
        
       		