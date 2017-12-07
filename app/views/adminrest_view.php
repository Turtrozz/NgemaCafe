<?php if(session_status() == PHP_SESSION_NONE){session_start();} include 'app/config.php'; ?>

<?php

	

	class AdminrestView{
		
	
	
		private $rest_data;
		
		public function __construct($data){
			
			
			
			$this->rest_data = $data;
			
			include 'helpers/header_admin.php';
			$this->add_rest_content();
			include 'helpers/admin_footer.php';
						
		}
		
		
		private function add_rest_content(){
			
			
			
			include 'viewscontent/adminrestviewcontent.php';
			
			
		}
		
		
	}



?>