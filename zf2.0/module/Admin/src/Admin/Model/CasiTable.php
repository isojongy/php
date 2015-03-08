<?php 
	namespace Admin\Model;
	use Zend\Db\TableGateway\TableGateway;
	use Zend\Db\Sql\Select;
	
	class CasiTable{
		protected $tableGateway;
		
		public function __construct(TableGateway $tableGateway){
			$this->tableGateway = $tableGateway;
		}
		
		public function fetchAll(){
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->order('tencasi')->limit(8);
			});
			return $resultSet;
		}
		
		public function getNum(){
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->columns(array('num' => new \Zend\Db\Sql\Expression('COUNT(*)')));
			});
			return $resultSet;
		}
		
		public function getCasi($id){
			$id = (int) $id;
			$rowset = $this->tableGateway->select(array('id_casi' => $id));
			$row = $rowset->current();
			if(!$row){
				throw new \Exception("Ca sĩ này không tồn tại!");
			}
			return $row;
		}
 	}
?>