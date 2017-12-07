<?php include 'app/config.php'; ?>

<?php


class Adminrest extends BaseController{
	
	public $controllerData; 
	
	public function __construct(){
		
		
		
		
		$this->controllerData = $this->loadModel('adminrest');
		
		
		
		
	}// End of shop model method
	
	public function rest_view(){
		
		$data = $this->controllerData->shopData();
		
		
		$this->loadView('adminrest',$data);
		
		
		
	}
	
	
	
	
}



?>