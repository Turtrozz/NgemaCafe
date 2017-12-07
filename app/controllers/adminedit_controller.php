<?php

class Adminedit extends BaseController{
	
	
	
	public $adminData;
	private $product_id; 
	
	public function __construct(){
		
		
		
		
		$this->adminData = $this->loadModel('adminedit');
		
		
		
		
	}// End of shop model method
	
	public function edit_view($product_id){
		
		$this->product_id= $product_id[0];
		
		$adminCategories = $this->adminData->shopData();
		$adminProdData = $this->adminData->adminProdData($this->product_id);
		
		$data_pool = array();
		$data_pool['categories'] = $adminCategories;
		$data_pool['product_data'] = $adminProdData;
		
		
		
		$this->loadView('adminedit',$data_pool);
		
		
		
	}
	
	
	
}// End of Home controller class


?>