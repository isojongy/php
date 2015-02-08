<?php
namespace Defaults\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class NghesiController extends AbstractActionController
{
	protected $theloaiTable;
	
	public function getTheloaiTable(){
		if (! $this->theloaiTable) {
			$sm = $this->getServiceLocator();
			$this->theloaiTable = $sm->get('Defaults\Model\TheloaiTable' );
		}
		return $this->theloaiTable;
	}
	
    public function indexAction()
    {
		$this->layout()->setVariable("status","nghesi");
		/*return array(
			'theloais' => $this->getTheloaiTable()->fetchAll(),
		);*/
    }
	
	 public function casiAction()
    {
		$this->layout()->setVariable("status","casi");
	}
	
	 public function nhomnhacAction()
    {
		$this->layout()->setVariable("status","nhomnhac");
	}
}