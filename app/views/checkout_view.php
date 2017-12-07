<?php 


require_once 'app/config.php';

class CheckoutView{
	
	
	
	
	
	private $cart_d;
		
		public function __construct($data){
			
			
			$this->cart_d = $data;
			
			
			include 'helpers/header.php';
			$this->add_shop_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_shop_content(){
			
		
		include_once'viewscontent/checkoutvcontent.php';
		
	}// End of addViewContent
	
	

}// End of home view class

?>
