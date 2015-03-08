<?php 
	namespace Admin\Model;
	use Zend\Db\TableGateway\TableGateway;
	use Zend\Db\Sql\Select;
	use Zend\Db\ResultSet\ResultSet;
	
	
	class ThanhvienTable{
		protected $tableGateway;
		
		public function __construct(TableGateway $tableGateway){
			$this->tableGateway = $tableGateway;
		}
		
		
		public function fetchAll(){
			//$select = new Select();
			//$select->from('baihat');
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->join('thanhvien','thanhvien.username = thanhvien.username',array('hoten'),'left')->order('tenbaihat')->limit(20);
			});
			return $resultSet;
				//$select->order('tenbaihat')->limit(20);
				/*$sqlSelect = $this->tableGateway->getSql()->select();
				$sqlSelect->join('casi', 'casi.id_casi = baihat.id_casi', array('tencasi'), 'left');

				$statement = $this->tableGateway->getSql()->prepareStatementForSqlObject($sqlSelect);
				$resultSet = $statement->execute();
				return $resultSet;

				//then in your controller or view:

				foreach($resultSet as $row){
					print_r($row['tenbaihat']);
					//print_r($row['column_name_othertable']);
				}
				exit;*/
				
			
		}
		
		public function getNum(){
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->columns(array('num' => new \Zend\Db\Sql\Expression('COUNT(*)')));
			});
			return $resultSet;
		}
		
		public function fetchNgheNhieu(){
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->order('luotnghe DESC')->limit(5);
			});
			return $resultSet;
		}
		
		public function getBaihat($id){
			$id = (int) $id;
			$rowset = $this->tableGateway->select(array('id_baihat' => $id));
			$row = $rowset->current();
			if(!$row){
				throw new \Exception("Bài hát này không tồn tại!");
			}
			return $row;
		}
 	}
?>