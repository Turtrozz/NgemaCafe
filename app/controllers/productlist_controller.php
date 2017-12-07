<?php include 'app/config.php'; ?>

<?php


class Productlist extends BaseController{
	
	public $product_req;
	private $product_data_obj;
	
	public function __construct(){
		
		
		
	}// End of shop model method
	
	public function products($product_id){
		
		
	
		$this->product_req = $product_id[0];
		$this->get_products();
		
	}
	
	private function get_products(){
		
		$this->product_data_obj = $this->loadModel('productlist',$this->product_req);
		$this->product_view();
		
		
	}
	
	private function product_view(){
		
		
		$view_data = $this->product_data_obj->productData();
		
		$this->loadView('productlist',$view_data);
		
		
	}//End of product view method
	
	
	
	
}



?>