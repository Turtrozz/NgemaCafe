<?php  include 'app/config.php'; ?>

<?php


class Cart extends BaseController{
	
	public $controllerData; 
	
	public function __construct(){
		
		$this->controllerData = $this->loadModel('cart');
		
	}// End of shop model method
	
	private function cart_view($data){
		
		
		
		
		$this->loadView('cart',$data);
		
		
		
	}
	
	public function cart(){
		
		
		
			$cart_data = $this->controllerData->check_if_cart_exists();
			
			$this->cart_view($cart_data);
		
		
	}
	
	
	
	
}



?>