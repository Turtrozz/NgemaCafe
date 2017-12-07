<?php 


require_once 'app/config.php';

class PayView{
	
	
	
	
	
	
		
		public function __construct(){
			
			
			
			
			include 'helpers/header.php';
			$this->add_shop_content();
			include 'helpers/footer.php';exit;
						
		}
		
		
		private function add_shop_content(){
			
		
		include_once'viewscontent/payvcontent.php';
		
	}// End of addViewContent
	
	

}// End of home view class

?>
