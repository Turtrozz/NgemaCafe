<?php 


require_once 'app/config.php';

class OrderView{
	
	
	
	
	
	
		
		public function __construct(){
			
			
			
			
			include 'helpers/header.php';
			$this->add_shop_content();
			include 'helpers/footer.php';exit;
						
		}
		
		
		private function add_shop_content(){
			
		
		include_once'viewscontent/ordervcontent.php';
		
	}// End of addViewContent
	
	

}// End of home view class

?>
