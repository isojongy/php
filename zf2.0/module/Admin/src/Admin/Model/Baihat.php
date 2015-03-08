<?php 
	namespace Admin\Model;
	
	class Baihat{
		public $id_baihat;
		public $tenbaihat;
		public $sangtac;
		public $url_hinh;
		public $url_baihat;
		public $luotnghe;
		public $loibaihat;
		public $id_theloai;
		public $tenquocgia;
		public $id_casi;
		public $id_nhom;
		public $num;
		
		public function exchangeArray($data){
			$this->id_baihat = (isset($data['id_baihat'])) ? $data['id_baihat'] : null;
			$this->tenbaihat = (isset($data['tenbaihat'])) ? $data['tenbaihat'] : null;
			$this->sangtac = (isset($data['sangtac'])) ? $data['sangtac'] : null;
			$this->url_hinh = (isset($data['url_hinh'])) ? $data['url_hinh'] : null;
			$this->url_baihat = (isset($data['url_baihat'])) ? $data['url_baihat'] : null;
			$this->luotnghe = (isset($data['luotnghe'])) ? $data['luotnghe'] : null;
			$this->loibaihat = (isset($data['loibaihat'])) ? $data['loibaihat'] : null;
			$this->id_theloai = (isset($data['id_theloai'])) ? $data['id_theloai'] : null;
			$this->tenquocgia = (isset($data['tenquocgia'])) ? $data['tenquocgia'] : null;
			$this->id_casi = (isset($data['id_casi'])) ? $data['id_casi'] : null;
			$this->id_nhom = (isset($data['id_nhom'])) ? $data['id_nhom'] : null;
			$this->num = (isset($data['num'])) ? $data['num'] : null;
		}
	}
?>