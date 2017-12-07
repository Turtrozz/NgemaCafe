<?php  if(session_status() == PHP_SESSION_NONE){ session_start();}





class Uprofile extends BaseController{
	
	
	
	private $data_obj;
	
	public function customeraccount(){
		


		
		$this->loadView('uaccount');
		
	}
	
	
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