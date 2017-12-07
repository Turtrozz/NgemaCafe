<?php if(session_status() == PHP_SESSION_NONE){session_start();}

class Checkout extends BaseController{

	
	public $controllerData; 
	
	public function __construct(){
		
		$this->controllerData = $this->loadModel('checkout');
		
	}// End of shop model method
	
	
	public function checkout(){
		
		
		
			$checkout_data = $this->controllerData->check_if_cart_exists();
			
			$this->checkout_view($checkout_data);
		
	}
	
	private function checkout_view($data){
		
		
		
		
		$this->loadView('checkout',$data);
		
		
		
	}
	

	
		
	
}// End of Home controller class


?>