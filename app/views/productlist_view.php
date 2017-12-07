<?php if(session_status() == PHP_SESSION_NONE){session_start();} include 'app/config.php'; ?>

<?php

	

	class ProductlistView{
		
	
	
		private $product_data;
		
		public function __construct($data){
			
			
			
			$this->product_data = $data;
			
			include 'helpers/header.php';
			$this->add_product_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_product_content(){
			
			
			
			include 'viewscontent/productlistvcontent.php';
			
			
		}
		
		
	}
