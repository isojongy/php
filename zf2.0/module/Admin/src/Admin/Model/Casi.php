<?php 
	namespace Admin\Model;
	
	class Casi{
		public $id_casi;
		public $tencasi;
		public $tenthat;
		public $url_hinh;
		public $ngaysinh;
		public $id_theloai_quocgia;
		public $id_nhom;
		public $tenquocgia;
		public $thongtinchitiet;
		public $num;
		
		public function exchangeArray($data){
			$this->id_casi = (isset($data['id_casi'])) ? $data['id_casi'] : null;
			$this->tencasi = (isset($data['tencasi'])) ? $data['tencasi'] : null;
			$this->tenthat = (isset($data['tenthat'])) ? $data['tenthat'] : null;
			$this->url_hinh = (isset($data['url_hinh'])) ? $data['url_hinh'] : null;
			$this->ngaysinh = (isset($data['ngaysinh'])) ? $data['ngaysinh'] : null;
			$this->id_theloai_quocgia = (isset($data['id_theloai_quocgia'])) ? $data['id_theloai_quocgia'] : null;
			$this->id_nhom = (isset($data['id_nhom'])) ? $data['id_nhom'] : null;
			$this->tenquocgia = (isset($data['tenquocgia'])) ? $data['tenquocgia'] : null;
			$this->thongtinchitiet = (isset($data['thongtinchitiet'])) ? $data['thongtinchitiet'] : null;
			$this->num = (isset($data['num'])) ? $data['num'] : null;
		}
	}
?>