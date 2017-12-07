<?php


class Model{
		
		private $data;
		
		public function __construct(){
			
			
		}// End of model constructor function
		
		public function appData(){
			
			$this->data = "Our app will be launching soon";
			echo $this->data;
			
		}// End of appData function
		
		
	}// End Model class
	
	
	
?>