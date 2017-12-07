<?php include 'app/config.php'; ?>

<?php


class Adminproddetail extends BaseController{
	
	public $product_req;
	private $product_data_info_obj;
	
	public function __construct(){
		
		
		
	}// End of shop model method
	
	public function adminproduct($product_id){
		
		
	
		$this->product_req = $product_id[0];
		$this->get_product_info();
		
	}
	
	private function get_product_info(){
		
		$this->product_data_info_obj = $this->loadModel('adminproddetail',$this->product_req);
		$this->product_info_view();
		
		
	}
	
	private function product_info_view(){
		
		
		$view_data = $this->product_data_info_obj->product_info();
		
		$this->loadView('adminproddetail',$view_data);
		
		
	}//End of product view method
	
	
	
	
}



?>