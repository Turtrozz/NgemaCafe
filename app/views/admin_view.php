<?php if(session_status() == PHP_SESSION_NONE){session_start();} include 'app/config.php'; ?>

<?php

	

	class AdminView{
		
	
	
		
		
		public function __construct(){
			
			include 'helpers/header_admin.php';
			$this->open_admin_content();
			include 'helpers/admin_footer.php';
						
		}
		
		
		private function open_admin_content(){
			
			
			
			include 'viewscontent/admincontent.php';
			
			
		}
		
		
	}



?>