<?php  include 'app/config.php';


class ForgotpassView{
	
	
	
	
	
		
		public function __construct(){
			
			include 'helpers/header.php';
			$this->add_view_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_view_content(){
			
			
			
			include 'viewscontent/forgotpasscontent.php';
			
			
		}
		
	
	
}


?>