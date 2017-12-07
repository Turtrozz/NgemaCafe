<?php  include 'app/config.php';


class RegisteredView{
	
	
	
	
	private $product_info_data;
		
		public function __construct($data){
			
			
			
			$this->product_info_data = $data;
			
			include 'helpers/header.php';
			$this->add_product_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_product_content(){
			
			
			
			include 'viewscontent/registeredcontent.php';
			
			
		}
		
	
	
}


?>