<?php
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	protected $casiTable;
	protected $baihatTable;
	protected $videoTable;
	protected $thanhvienTable;
	public function getCasiTable(){
		if (! $this->casiTable) {
			$sm = $this->getServiceLocator();
			$this->casiTable = $sm->get('Admin\Model\CasiTable' );
		}
		return $this->casiTable;
	}
	public function getBaihatTable(){
		if (! $this->baihatTable) {
			$sm = $this->getServiceLocator();
			$this->baihatTable = $sm->get('Admin\Model\BaihatTable' );
		}
		return $this->baihatTable;
	}
	public function getVideoTable(){
		if (! $this->videoTable) {
			$sm = $this->getServiceLocator();
			$this->videoTable = $sm->get('Admin\Model\VideoTable' );
		}
		return $this->videoTable;
	}
	public function getThanhvienTable(){
		if (! $this->thanhvienTable) {
			$sm = $this->getServiceLocator();
			$this->thanhvienTable = $sm->get('Admin\Model\ThanhvienTable' );
		}
		return $this->thanhvienTable;
	}
	
    public function indexAction()
    {
        $this->layout()->setVariable("status","trangchu");
		$casi = $this->getCasiTable()->getNum();
		$this->layout()->setVariable("casi",$casi);
		$baihat=$this->getBaihatTable()->getNum();
		$this->layout()->setVariable("baihat",$baihat);
		$video=$this->getVideoTable()->getNum();
		$this->layout()->setVariable("video",$video);
		$thanhvien=$this->getThanhvienTable()->getNum();
		$this->layout()->setVariable("thanhvien",$thanhvien);
    }
	
	
}
