<?php include 'app/config.php'; ?>

<?php


class Shop extends BaseController{
	
	public $controllerData; 
	
	public function __construct(){
		
		
		
		
		$this->controllerData = $this->loadModel('shop');
		
		
		
		
	}// End of shop model method
	
	public function shop_view(){
		
		$data = $this->controllerData->shopData();
		
		
		$this->loadView('shop',$data);
		
		
		
	}
	
	
	
	
}



?>