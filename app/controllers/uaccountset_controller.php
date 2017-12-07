<?php  if(session_status() == PHP_SESSION_NONE){ session_start();}





class Uaccountset extends BaseController{
	
	
	
	private $data_obj;
	
	public function accountset(){
		


		
		if(isset($_SESSION['log_status'])){
			
			
			$logged_user_data = array();
			$logged_user_data['user_mail'] = $_SESSION['user_log_mail'];
			$logged_user_data['user_pass'] = $_SESSION['user_log_pass'];
			
			
			
			$this->data_obj = $this->loadModel('uaccountset');
			$this->loggeduser($logged_user_data);
		
		}else{
		
			header('Location: http://localhost/Turtrozz/webApzz/cafeT/public/login/customerlogin');exit;
			
		}
				
		
	}// End of account setting method
	
	
	private function loggeduser($data){
		
		
		$this->get_user_info($data);

		
	}//End of logged user method
	
	
	
	
	private function get_user_info($u_data){
		
		
		
		
		$u_data = $this->data_obj->user_info($u_data);
		$this->loadView('uaccountset',$u_data);
		
		
		
	}// End of get user information method
	
	
}// End of Home controller class





?>