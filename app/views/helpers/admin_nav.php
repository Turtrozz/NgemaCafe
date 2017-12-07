<?php include'app/config.php'; ?>


<div class="admin-nav-content">


	<section class="admin-brand">
    
    	<p>
                
            <li>
            
                <a href="#">
                
                    <img src="<?php echo $app_path.'public/imgs/restLogo_admin.png'; ?>" width="70" height="39" />
                
                </a><span><b>NgemaAdmin</b></span>
        
    		</li>
         </p>
    
    </section>
    
    <section class="admin-user">
    
    	<p>
                
            <b id="">
            
               
                
                   
                    
                        <img src="<?php echo $app_path.'public/imgs/customers/customerDefault/blank_user.jpg'; ?>"
                        width="60" height="60" style="border-radius: 60px;" />
                    
            
               
            
            </b>
            
            <b>
                <small>Welcome,</small>
                <small id="admin-name">Sihle Ngema</small>
          
            
            </b>
            
            <strong class="clearfix"></strong>
            
            
         </p>
    
    </section>
    
    <section class="admin-links">

        <ul>
        
        
            <li><a href="<?php echo $app_path.'public/admin/manage' ;?>"><small>Dashboard</small></a></li>
            <li><a href="<?php echo $app_path.'public/adminrest/rest_view' ;?>"><small>Products Manager</small></a></li>
            
            
        
        </ul>
    
    </section>


</div><!---End of admin navigation content---->