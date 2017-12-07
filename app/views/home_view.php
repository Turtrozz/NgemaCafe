<?php if(session_status() == PHP_SESSION_NONE){session_start();}


require_once 'app/config.php';

class HomeView{
	
	
	
	
	
	public function __construct(){
		
		
		include_once 'helpers/header.php';
		$this->addViewContent();
		include_once 'helpers/footer.php'; 

	}// End of view construct function
	
	
	private function addViewContent(){
		
		include_once'viewscontent/homeviewcontent.php';
		
	}// End of addViewContent
	
	

}// End of home view class

?>

