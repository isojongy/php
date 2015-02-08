<?php 
	namespace Defaults\Model;
	
	class Quocgia{
		public $tenquocgia;
		
		public function exchangeArray($data){
			$this->tenquocgia = (isset($data['tenquocgia'])) ? $data['tenquocgia'] : null;
		}
	}
?>