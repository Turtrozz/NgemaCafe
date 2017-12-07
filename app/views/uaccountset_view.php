<?php  include 'app/config.php';


class UaccountsetView{
	
	
	
	
	private $user_info_data;
		
		public function __construct($u_data){
			
			
			$this->user_info_data = $u_data;
			
			
			include 'helpers/header.php';
			$this->add_uaccount_content();
			include 'helpers/footer.php';
						
		}
		
		
		private function add_uaccount_content(){
			
			
			
			include 'viewscontent/uaccountsetcontent.php';
			
			
		}
		
	
	
}


?>