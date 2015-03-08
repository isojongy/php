<?php 
	namespace Admin\Model;
	use Zend\Db\TableGateway\TableGateway;
	use Zend\Db\Sql\Select;
	use Zend\Db\ResultSet\ResultSet;
	
	class BaihatTable{
		protected $tableGateway;
		
		public function __construct(TableGateway $tableGateway){
			$this->tableGateway = $tableGateway;
		}
		
		public function fetchJoin(){
			/*$select = new Select();
			$select->from('baihat')
					->columns(array('tenbaihat'))
					->join('casi','casi.id_casi = baihat.id_casi', array('tencasi'),'left');
					
			echo $select->getSqlString();
			$resultSet = $this->tableGateway->selectWith($select);
			
			return $resultSet;*/
		}
		
		public function getNum(){
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->columns(array('num' => new \Zend\Db\Sql\Expression('COUNT(*)')));
			});
			return $resultSet;
		}
		
		
		public function fetchAll(){
			//$select = new Select();
			//$select->from('baihat');
			$resultSet = $this->tableGateway->select(function(Select $select){
				$select->join('casi','casi.id_casi = baihat.id_casi',array('tencasi'),'left')->order('tenbaihat')->limit(20);
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
		
		
 	}
?>