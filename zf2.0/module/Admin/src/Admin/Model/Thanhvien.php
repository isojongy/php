<?php 
	namespace Admin\Model;
	
	class Thanhvien{
		public $username;
		public $password;
		public $email;
		public $diachi;
		public $sdt;
		public $level;
		public $hoten;
		public $num;
		
		public function exchangeArray($data){
			$this->username = (isset($data['username'])) ? $data['username'] : null;
			$this->password = (isset($data['password'])) ? $data['password'] : null;
			$this->email = (isset($data['email'])) ? $data['email'] : null;
			$this->diachi = (isset($data['diachi'])) ? $data['diachi'] : null;
			$this->sdt = (isset($data['sdt'])) ? $data['sdt'] : null;
			$this->level = (isset($data['level'])) ? $data['level'] : null;
			$this->hoten = (isset($data['hoten'])) ? $data['hoten'] : null;
			$this->num = (isset($data['num'])) ? $data['num'] : null;
		}
	}
?>