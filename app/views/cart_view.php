<?php if(session_status() == PHP_SESSION_NONE){session_start();}

 include 'app/config.php'; ?>

<?php

	

	class CartView{
		
	
	
		private $cart_d;
		
		public function __construct($data){
			
			
			$this->cart_d = $data;
			
			
			include 'helpers/header.php';
			$this->add_shop_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_shop_content(){
			
			
			
			include 'viewscontent/cartvcontent.php';
			
			
		}
		
		
	}



?>