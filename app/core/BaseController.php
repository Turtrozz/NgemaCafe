<?php


class BaseController{
	
	
	
	protected function loadModel($model,$d_require= NULL){
		
		
		require_once '../app/models/'.$model.'_model.php';
		
		
		 $class_m_name = ucfirst($model);
		 $class_m_name .= 'Model';
		
		
		
		if(gettype($d_require) !== NULL){
	
		 	return new $class_m_name($d_require);
		 	
		}else{
			
			
			return new $class_m_name();
			
			
		}
		
		
	}// End of load model function
	
	
	protected function loadView($view,$mod_data=NULL){
		
		require_once '../app/views/'.$view.'_view.php';
		
		$class_name = ucfirst($view);
		$class_name .= 'View';
		
		
		new $class_name($mod_data);
		
		
		
		
	}// End of load view function
	
	
	
	
}// End of BaseController class


?>