<?php


	function process_admin_data($databaseObject){
		
		
		
		if(isset($_POST['product_edit'])){
			
			$update_data = array();
			$product_edit_data = array();
			
			$product_edit_data['product_id'] = $_POST['product_id'];
			$product_edit_data['category_id'] = $_POST['category_id'];
			$product_edit_data['product_code'] = $_POST['product_code'];
			$product_edit_data['product_name'] = $_POST['product_name'];
			$product_edit_data['product_price'] = number_format($_POST['product_price'],2);
			$product_edit_data['product_desc'] = htmlentities($_POST['product_description']);
			
			
			$update_data['data_object'] = $databaseObject;
			$update_data['data'] = $product_edit_data;
			
			update_product($update_data);
			
		}elseif(isset($_POST['product_add'])){
			
			
			
			$update_data = array();
			$product_edit_data = array();
			
			
			$product_edit_data['category_id'] = $_POST['product_category'];
			$product_edit_data['product_code'] = $_POST['product_code'];
			$product_edit_data['product_name'] = $_POST['product_name'];
			$product_edit_data['product_price'] = number_format($_POST['product_price'],2);
			$product_edit_data['product_desc'] = htmlentities($_POST['product_description']);
			
			
			$update_data['data_object'] = $databaseObject;
			$update_data['data'] = $product_edit_data;
			
			add_product($update_data);
			
			
			
		}elseif(isset($_POST['product_delete'])){
			
			
			$update_data = array();
			$product_edit_data = array();
			
			
			$product_edit_data['product_id'] = $_POST['product_id'];
			
			
			$update_data['data_object'] = $databaseObject;
			$update_data['data'] = $product_edit_data;
			
			delete_product($update_data);
			
		}
		
	}// End of function
	
	
	function update_product($update_data){
		
		
		
		$data = $update_data['data'];
		$source = $update_data['data_object'];
		
		$update_response = $source->update_shop_product($data);
		
		if(gettype($update_response) == 'boolean' && $update_response == true){
			
			$json_arr = array();
			
			$json_arr['type'] = 'product update';
			$json_arr['message'] = 'The product has been successfully updated';
			$json_arr['json_type'] = 'update success';
			
			echo json_encode($json_arr);exit;
			
		}else{
			
			$json_arr = array();
			
			$json_arr['type'] = 'product update';
			$json_arr['message'] = 'There was an error trying to update the product, retry';
			$json_arr['json_type'] = 'update fail';
			
			echo json_encode($json_arr);exit;
			
		}
		
		
	}// End of update data function




function add_product($update_data){
		
		
		
		$data = $update_data['data'];
		$source = $update_data['data_object'];
		
		$update_response = $source->add_shop_product($data);
		
		
		
		if(gettype($update_response) == 'boolean' && $update_response == true){
			
			$json_arr = array();
			
			$json_arr['type'] = 'product addition';
			$json_arr['message'] = 'A new product has successfully been added';
			$json_arr['json_type'] = 'addition success';
			
			echo json_encode($json_arr);exit;
			
		}else{
			
			$json_arr = array();
			
			$json_arr['type'] = 'product addition';
			$json_arr['message'] = 'There was an error trying to add a new product,<br /> ensure product code is
			 not duplicate.';
			$json_arr['json_type'] = 'addition fail';
			
			echo json_encode($json_arr);exit;
			
		}
		
		
	}// End of update data function

function delete_product($update_data){
		
		
		
		$data = $update_data['data'];
		$source = $update_data['data_object'];
		
		$update_response = $source->delete_shop_product($data);
		
		
		if(gettype($update_response) == 'boolean' && $update_response == true){
			
			$json_arr = array();
			
			$json_arr['type'] = 'product delete';
			$json_arr['message'] = 'The product has been successfully deleted';
			$json_arr['json_type'] = 'delete success';
			
			echo json_encode($json_arr);exit;
			
		}else{
			
			$json_arr = array();
			
			$json_arr['type'] = 'product delete';
			$json_arr['message'] = 'There was an error trying to delete the product, retry';
			$json_arr['json_type'] = 'delete fail';
			
			echo json_encode($json_arr);exit;
			
		}
		
		
	}// End of update data function








?>