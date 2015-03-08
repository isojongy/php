<?php 
	namespace Admin\Model;
	
	class Video{
		public $id_video;
		public $tenvideo;
		public $id_theloai;
		public $url_video;
		public $luotxem;
		public $noidung;
		public $tenquocgia;
		public $num;
		
		public function exchangeArray($data){
			$this->id_video = (isset($data['id_video'])) ? $data['id_video'] : null;
			$this->tenvideo = (isset($data['tenvideo'])) ? $data['tenvideo'] : null;
			$this->id_theloai = (isset($data['id_theloai'])) ? $data['id_theloai'] : null;
			$this->url_video = (isset($data['url_video'])) ? $data['url_video'] : null;
			$this->luotxem = (isset($data['luotxem'])) ? $data['luotxem'] : null;
			$this->noidung = (isset($data['noidung'])) ? $data['noidung'] : null;
			$this->tenquocgia = (isset($data['tenquocgia'])) ? $data['tenquocgia'] : null;
			$this->num = (isset($data['num'])) ? $data['num'] : null;
		}
	}
?>