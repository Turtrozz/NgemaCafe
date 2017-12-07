<?php if(session_status() == PHP_SESSION_NONE){session_start();} include 'app/config.php'; ?>

<?php

	

	class AdminaddView{
		
	
	
		private $product_data;
		
		public function __construct($data){
			
			
			
			$this->product_data = $data;
			
			include 'helpers/header_admin.php';
			$this->add_admin_product_content();
			include 'helpers/admin_footer.php';
						
		}
		
		
		private function add_admin_product_content(){
			
			
			
			include 'viewscontent/adminadd_content.php';
			
			
		}
		
		
	}
