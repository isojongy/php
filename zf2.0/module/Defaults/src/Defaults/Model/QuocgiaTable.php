<?php 
	namespace Defaults\Model;
	use Zend\Db\TableGateway\TableGateway;
	
	class QuocgiaTable{
		protected $tableGateway;
		
		public function __construct(TableGateway $tableGateway){
			$this->tableGateway = $tableGateway;
		}
		
		public function fetchAll(){
			$resultSet = $this->tableGateway->select();
			return $resultSet;
		}
		
		public function getQuocgia($tenquocgia){
			$tenquocgia = $tenquocgia;
			$rowset = $this->tableGateway->select(array('tenquocgia' => $tenquocgia));
			$row = $rowset->current();
			if(!$row){
				throw new \Exception("Tên quốc gia không tồn tại!");
			}
			return $row;
		}
 	}
?>