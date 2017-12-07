<?php  if(session_status() == PHP_SESSION_NONE){ session_start();}





class Forgotpass extends BaseController{
	
	
	
	
	
	public function passwordreset(){
		

			$this->loadView('forgotpass');
		
	}
	
	
	
	
	
}// End of Home controller class





?>