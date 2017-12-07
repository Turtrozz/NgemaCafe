<?php if(session_status() == PHP_SESSION_NONE){session_start();}

class Pay extends BaseController{

	
	
	public function pay(){
		
		
		
			
			$this->pay_view();
		
	}
	
	private function pay_view(){
		
		
		
		
		$this->loadView('pay');
		
		
		
	}
	

	
		
	
}// End of Home controller class


?>