<?php if(session_status() == PHP_SESSION_NONE){session_start();} include 'app/config.php'; ?>

<?php

	

	class ShopView{
		
	
	
		private $rest_data;
		
		public function __construct($data){
			
			
			
			$this->rest_data = $data;
			
			include 'helpers/header.php';
			$this->add_shop_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_shop_content(){
			
			
			
			include 'viewscontent/shopviewcontent.php';
			
			
		}
		
		
	}



?>