<?php
namespace Defaults\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class Nhacmp3Controller extends AbstractActionController
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
		$this->layout()->setVariable("status","nhacmp3");
		/*return array(
			'theloais' => $this->getTheloaiTable()->fetchAll(),
		);*/
    }
	
	public function nghenhacAction()
	{	
		$this->layout()->setVariable("status","nghenhac");
	}
}