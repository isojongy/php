<?php 
	namespace Admin\Model;
	use Zend\Db\TableGateway\TableGateway;
	use Zend\Db\Sql\Select;
	use Zend\Db\ResultSet\ResultSet;
	
	class VideoTable{
		protected $tableGateway;
		
		public function __construct(TableGateway $tableGateway){
			$this->tableGateway = $tableGateway;
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
				$select->join('video','video.id_video = baihat.id_video',array('tenvideo'),'left')->order('tenbaihat')->limit(20);
			});
			return $resultSet;
			
				
			
		}
		
		
 	}
?>