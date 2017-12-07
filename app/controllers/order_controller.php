<?php if(session_status() == PHP_SESSION_NONE){session_start();}

class Order extends BaseController{

	
	
	public function order(){
		
		
		
			
			$this->order_view();
		
	}
	
	private function order_view(){
		
		
		
		
		$this->loadView('order');
		
		
		
	}
	

	
		
	
}// End of Home controller class


?>