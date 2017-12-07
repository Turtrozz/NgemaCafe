<?php  if(session_status() == PHP_SESSION_NONE){ session_start();}





class Login extends BaseController{
	
	
	
	
	
	public function customerlogin(){
		

			$this->loadView('login');
		
	}
	
	
	
	
	
}// End of Home controller class





?>