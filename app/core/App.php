<?php

class App{
	
	
	protected $controller = 'home';
	protected $method = 'defaultAction';
	protected $params = array();
	protected $url_array;
	
	public function __construct(){
		
		 $this->parseURL();
		 $this->checkControllerExist();
		 $this->includeControllerFile();
		 $this->checkMethodExist();
		 
		
		
	}// End of class constructor method
	
	
	private function parseURL(){
		
		
		
		if(isset($_GET['url'])):
		
		
			
			
			$url_array = explode('/',filter_var(rtrim($_GET['url']),FILTER_SANITIZE_URL));
			$this->url_array = $url_array;
			
		endif;
		
		
		
	}// End of parseURL method
	
	
	private function unset_url_query($index){
		
		
		unset($this->url_array[$index]);
		
	}
	
	
	private function checkControllerExist(){
		
		
		if(file_exists('../app/controllers/'.$this->url_array[0].'_controller.php')):
			
		
			$this->controller = $this->url_array[0];
			$this->unset_url_query(0);
			
		
		endif;
		
		
	}// End of check Controller exist function
	
	private function includeControllerFile(){
		
		
		require_once ('../app/controllers/'.$this->controller.'_controller.php');
		
		$this->createObjFromFile();
		
		
		
	}// End of include controller function
	
	
	private function createObjFromFile(){
		
		
		$this->controller = new $this->controller;
		
		
		
	}// End of createObjectFromFile function
	
	
	private function checkMethodExist(){
		
		
		if(isset($this->url_array[1])):
		
		
			if(method_exists($this->controller,$this->url_array[1])):
			
			
			$this->method = $this->url_array[1];
			$this->unset_url_query(1);
			
			
			endif;
		
		
		endif;
		
		
		$this->checkPassedParams();
		
		
	}// End of checkMethodExist method
	
	
	private function checkPassedParams(){
		
		
		
		if($this->url_array):
		
		
			$this->params = array_values($this->url_array);
			
			
		
		else:
		
			$this->params = array();
		
			
		
		endif;
		
		$this->callControllerMethod();
		
	}// End of check if there are passed parameters 
	
	private function callControllerMethod(){
		
		
		call_user_func_array(array($this->controller,$this->method),$this->params);
		
	}// End of call controller method
	
	
	
	
	
}// End of App Class



?>