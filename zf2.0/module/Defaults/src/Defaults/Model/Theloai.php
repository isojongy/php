<?php 
	namespace Defaults\Model;
	
	class Theloai{
		public $id_theloai;
		public $tentheloai;
		
		public function exchangeArray($data){
			$this->id_theloai = (isset($data['id_theloai'])) ? $data['id_theloai'] : null;
			$this->tentheloai = (isset($data['tentheloai'])) ? $data['tentheloai'] : null;
		}
	}
?>