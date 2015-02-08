<?php
namespace Defaults\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class VideosController extends AbstractActionController
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
		$this->layout()->setVariable("status","videos");
		/*return array(
			'theloais' => $this->getTheloaiTable()->fetchAll(),
		);*/
    }
}