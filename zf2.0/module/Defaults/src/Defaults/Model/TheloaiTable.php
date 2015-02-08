<?php 
	namespace Defaults\Model;
	use Zend\Db\TableGateway\TableGateway;
	use Zend\Db\Sql\Select;
	
	class TheloaiTable{
		protected $tableGateway;
		
		public function __construct(TableGateway $tableGateway){
			$this->tableGateway = $tableGateway;
		}
		
		public function fetchAll(){
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->order('id_theloai DESC');
			});
			return $resultSet;
		}
		
		public function getTheloai($id){
			$id = (int) $id;
			$rowset = $this->tableGateway->select(array('id_theloai' => $id));
			$row = $rowset->current();
			if(!$row){
				throw new \Exception("Id không tồn tại!");
			}
			return $row;
		}
 	}
?>