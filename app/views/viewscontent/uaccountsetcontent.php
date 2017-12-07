<?php include_once 'app/config.php'; ?>


<div class="m-shop-content-container">

	<?php include_once 'app/views/helpers/brand.php';?>

 <div class="m-shop-content">
 
 
	<div class="uaccount-content">
   
    		
            
           <article class="uaccount-nav-content">
           
           
           		<section>
                
                	<h3><?php echo $this->user_info_data['firstName'].' '.$this->user_info_data['lastName']; ?></h3>
                	<?php include_once 'app/views/helpers/uaccount_nav.php';?>
                
                </section>
           
           </article><!---End of user account navigation menu content container--->
           
           
           
           <article class="u-alt-settings-content">
           
           		<div>
                
                	<h3>
                    	Account Settings
                    
                    </h3>
                    
                    
                
                </div>
                
               
                
                <div class="account-content-opts">
                
                	<section class="about-user">
                    
                    	<div class="avatar-content">
                         
                        	<img class="avatar"
                            src="<?php echo $app_path.'public/imgs/customers/customerDefault/blank_user.jpg'; ?>"
                            width="150" height="150"/>
                            
                            <section class="upload animated fadeIn" id="upload-image">
                            
                            <p>Update profile picture</p>
                            
                            <p  class="upload-ava">
                            <img src="<?php echo $app_path.'public/imgs/uploadicon.png'; ?>"
                            width="20" height="20"/>
                            </p>
                            
                            </section>
                          
                            
                            
                        
                        </div>
                        
                        
                        	
                        
                        <div>
                        
                        	<form id="u-about-update">
                           
                           
                            
                            	<P><label>About me</label></P>
                                
                                <P>
                                <textarea placeholder="<?php 
									if(gettype($this->user_info_data['bio']) != 'null' && $this->user_info_data['bio'] != ''){
										
									echo $this->user_info_data['bio'];
									 
									}else{
										echo 'About You';
									}
								?>" 
                                name="about_user" id="about-text"></textarea><br />
                                <small><b id="text-count">0</b>/150</small>
                                </P>
                                
                                <P id="about-sub">
                                
                                <input type="hidden" name="user_about_up_mail"
                                value="<?php echo $this->user_info_data['emailAddress']; ?>" />
                                <input type="hidden" name="user_about_up_f" value="update about" />
                                <input type="hidden" name="about_update_test" value="update test" />
                                <input type="submit" name="update-about" value="EDIT" class="sub" />
                                </P>
                            
                            </form>
                        
                        </div>
                        
                        <strong class="clearfix"></strong>
                    
                    </section>
                    
                    <section class="user-personal">
                    
                    
                    	<form id="u-personal-update" onsubmit="return validate_p_update_form(this);">
                        
                        
                        	<p>
                            
                            	<span>
                                
                                	<label>First Name<small>*</small></label><br />
                                    <input type="text" name="logged_user_new_name" id="up_name" 
                                    value="<?php echo $this->user_info_data['firstName']; ?>" /><br />
                                
                                </span>
                                
                                
                                <span>
                                
                                	<label>Last Name<small>*</small></label><br />
                                    <input type="text" name="logged_user_new_lname" id="up_lname"
                                    value="<?php echo $this->user_info_data['lastName']; ?>" /><br />
                                
                                </span>
                                
                                <strong class="clearfix"></strong>
                            
                            </p>
                            
                            
                            <p>
                            
                            	<span>
                                
                                	<label>E-Mail<small>*</small></label><br />
                                    <input type="text" name="logged_user_new_mail" id="up_mail" 
                                    value="<?php echo $this->user_info_data['emailAddress']; ?>" />
                                     <input type="hidden" name="logged_user_mail" 
                                    value="<?php echo $this->user_info_data['emailAddress']; ?>" /><br />
                                
                                </span>
                                
                                <span>
                                
                                	<label>Password<small>*</small></label><br />
                                    <input type="password" name="logged_user_new_pass" 
                                    value="<?php echo $this->user_info_data['password']; ?>" id="pass" />
                                    <input type="hidden" name="logged_user_pass" 
                                    value="<?php echo $this->user_info_data['password']; ?>" id="pass" />
                                    <input type="hidden" name="user_personal_up_f" value="user_personal_up" />
                                    
                                    <button  id="pass-show" class="show-pass">Show</button><br />
                                    
                                
                                </span>
                               <strong class="clearfix"></strong>
                            
                            </p>
                            
                            <p>
                            
                            	<span>
                                
                                
                                    <input type="hidden" name="personal_update_test" value="update test" />
                                    <input type="submit" name="uPersonalSub" value="EDIT" class="sub" />
                                
                                </span>
                                
                                
                               
                            
                            </p>
                        
                        
                        
                        </form>
                    
                    
                    </section><!---End of user personal details--->
                    
                    <section class="account-deactivate">
                    
                    	<form onsubmit="return deactivateAccount(this);">
                        
                        	
                        	<input type="hidden" name="account_deactivate" value="deactivate" />
                            <input type="hidden" name="deactivation_mail" 
                            value="<?php echo $this->user_info_data['emailAddress']; ?>" />
                        	<input type="submit" name="userDeactivate" value="DEACTIVATE ACCOUNT" class="deactivate" />
                        
                        
                        </form>
                    
                    </section>
                
                </div>
           		
               
           
           </article><!---End of uaccount settings content container--->
           <strong class="clearfix"></strong>
            
           
             
             
     </div><!---End of user account content---->
             
             
    </div><!--End of restuarant content container--->
    
	</div>
       
           

    
   		

			


