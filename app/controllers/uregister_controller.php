<?php

if(session_status() == PHP_SESSION_NONE){
	
	
	session_start();
	
}

class Uregister extends BaseController{
	
	
	
	
	
	public function uregister(){
		

		
		$this->loadView('uregister');
		
		
	}
	
}// End of Home controller class


?>