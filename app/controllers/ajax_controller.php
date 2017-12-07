<?php






class Ajax extends BaseController{
	
	
	
	private static $database_object;
	
	public static function manipulate_cart(){
		
		self::get_data_source();
		include 'app/util/cart.php';
		
		
		
	}// End of manipulate cart class method
	
	
	public static function populate_cart(){
		
		self::get_data_source();
		include 'app/util/cart.php';
		
		$popu_data = build_popu_data(self::$database_object);
		echo $popu_data;exit;
		
		
	}// End of manipulate cart class method
	
	
	public static function count_cart(){
		
		include 'app/util/cart.php';
		
		$total = check_cart_total();
		echo $total;exit;
		
	}// End of manipulate cart class method
	
	
	public static function registerUser(){
		
		self::get_data_source();
		include('app/util/user.php');
		
		process_reg_data(self::$database_object);
		
		
		
	}
	
	public static function log_user_in(){
		
		self::get_data_source();
		include('app/util/user_login.php');
		
		log_user_in(self::$database_object);
		
		
		
	}
	
	
	
	
	public static function update_user_about(){
		
		self::get_data_source();
		include('app/util/user_update.php');
		process_up_data(self::$database_object);
		
		
	}
	
	public static function update_user_personal(){
		
		self::get_data_source();
		include('app/util/user_update.php');
		process_up_data(self::$database_object);
		
		
	}
	
	public static function deactivate_user(){
		
		self::get_data_source();
		include('app/util/user_update.php');
		process_up_data(self::$database_object);
		
		
	}
	
	// Admin related functions
	
	public static function admin_edit_product(){
		
		self::get_data_source();
		include('app/util/admin_edit.php');
		process_admin_data(self::$database_object);
		
		
	}
	
	
	public static function admin_add_product(){
		
		self::get_data_source();
		include('app/util/admin_edit.php');
		process_admin_data(self::$database_object);
		
		
	}
	
	public static function admin_del_product(){
		
		self::get_data_source();
		include('app/util/admin_edit.php');
		process_admin_data(self::$database_object);
		
		
	}
	
	
	public static function get_data_source(){
		
		self::$database_object = self::loadModel('ajax');
		
	}// End of get data so
	
	
	

	
	
}// End of ajax controller







?>