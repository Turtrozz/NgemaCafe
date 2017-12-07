<?php  if(session_status() == PHP_SESSION_NONE){ session_start();}





class Registered extends BaseController{
	
	
	
	private $data_obj;
	
	public function customer(){
		


		
		if(isset($_SESSION['log_status'])){
			
			$this->data_obj = $this->loadModel('registered');
			$this->logged();
		
		}else{
		
			header('Location: http://localhost/Turtrozz/webApzz/cafeT/public/home/defaultAction');exit;
			
		}
				
		
	}
	
	
	public function logged(){
		
		
		$this->get_product_info();

		
	}
	
	
	
	
	private function get_product_info(){
		
		$random_product_id = mt_rand(1,30);
		
		
		$data = $this->data_obj->product_info($random_product_id);
		$this->loadView('registered',$data);
		
		
		
	}
	
	
	
}// End of Home controller class





?>