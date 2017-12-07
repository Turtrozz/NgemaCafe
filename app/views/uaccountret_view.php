<?php  include 'app/config.php';


class UaccountView{
	
	
	
	
	private $product_info_data;
		
		public function __construct(){
			
			
			
			
			
			include 'helpers/header.php';
			$this->add_uaccount_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_uaccount_content(){
			
			
			
			include 'viewscontent/uaccountcontent.php';
			
			
		}
		
	
	
}


?>