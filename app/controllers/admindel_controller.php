<?php

class Admindel extends BaseController{
	
	
	
	public $adminData;
	private $product_id; 
	
	public function __construct(){
		
		
		
		
		$this->adminData = $this->loadModel('admindel');
		
		
		
		
	}// End of shop model method
	
	public function del_view($product_id){
		
		$this->product_id= $product_id[0];
		
		$adminCategories = $this->adminData->shopData();
		$adminProdData = $this->adminData->adminProdData($this->product_id);
		
		$data_pool = array();
		$data_pool['categories'] = $adminCategories;
		$data_pool['product_data'] = $adminProdData;
		
		
		
		$this->loadView('admindel',$data_pool);
		
		
		
	}
	
	
	
}// End of Home controller class


?>