<?php if(session_status() == PHP_SESSION_NONE){session_start();} include 'app/config.php'; ?>

<?php

	

	class ProductdetailView{
		
	
	
		private $product_info_data;
		
		public function __construct($data){
			
			
			
			$this->product_info_data = $data;
			
			include 'helpers/header.php';
			$this->add_product_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_product_content(){
			
			
			
			include 'viewscontent/productdetailvcontent.php';
			
			
		}
		
		
	}
