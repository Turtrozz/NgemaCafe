<?php 


require_once 'app/config.php';

class UregisterView{
	
	
	
	
	
	public function __construct(){
		
		
		include_once 'helpers/header.php';
		$this->addViewContent();
		include_once 'helpers/footer.php'; 

	}// End of view construct function
	
	
	private function addViewContent(){
		
		include_once'viewscontent/uregistervcontent.php';
		
	}// End of addViewContent
	
	

}// End of home view class

?>
