<?php  if(session_status() == PHP_SESSION_NONE){ session_start();}





class Uaccount extends BaseController{
	
	
	
	private $data_obj;
	
	public function customeraccount(){
		


		if(isset($_SESSION['log_status'])){
			
			
			
			$this->loadView('uaccount');
		
		}else{
			
			
			header('Location: http://localhost/Turtrozz/webApzz/cafeT/public/login/customerlogin');exit;
			
			
		}
		
		
		
	}// End of customer account method
	
	
	public function logged(){
		
		
		$this->get_product_info();

		
	}
	
	
	
	
	private function get_product_info(){
		
		$random_product_id = mt_rand(1,30);
		
		
		$data = $this->data_obj->product_info($random_product_id);
		$this->loadView('uaccount',$data);
		
		
		
	}
	
	
	
}// End of Home controller class





?>