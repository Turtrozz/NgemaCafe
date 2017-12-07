

<?php


class Adminprod extends BaseController{
	
	public $product_req;
	private $product_data_obj;
	
	public function __construct(){
		
		
		
	}// End of shop model method
	
	public function adminproducts($product_id){
		
		
	
		$this->product_req = $product_id[0];
		$this->get_products();
		
	}
	
	private function get_products(){
		
		
		$this->product_data_obj = $this->loadModel('adminprod',$this->product_req);
		$this->adminproduct_view();
		
		
	}
	
	private function adminproduct_view(){
		
		
		$view_data = $this->product_data_obj->productData();
		
		$this->loadView('adminprod',$view_data);
		
		
	}//End of product view method
	
	
	
	
}



?>