<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Defaults\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	protected $theloaiTable;
	protected $quocgiaTable;
	protected $_cache;
	
	public function __construct(){
		//$theloais = $this->getTheloaiTable()->fetchAll();
		//return $this->layout()->setVariable("theloais",$theloais);
	}
	
	public function getTheloaiTable(){
		if (! $this->theloaiTable) {
			$sm = $this->getServiceLocator();
			$this->theloaiTable = $sm->get('Defaults\Model\TheloaiTable' );
		}
		/*else{
			$this->theloaiTable = null;
		}*/
		return $this->theloaiTable;
	}
	
	public function getQuocgiaTable(){
		if (! $this->quocgiaTable) {
			$sm = $this->getServiceLocator();
			$this->quocgiaTable = $sm->get('Defaults\Model\QuocgiaTable' );
		}
		/*else{
			$this->theloaiTable = null;
		}*/
		return $this->quocgiaTable;
	}
	
    public function indexAction()
    {
		$this->layout()->setVariable("status","trangchu");
		
    }
	
	public function lienheAction()
	{	
		$this->layout()->setVariable("status","lienhe");
		$theloais = $this->getTheloaiTable()->fetchAll();
		$this->layout()->setVariable("theloais",$theloais);
		$quocgias = $this->getQuocgiaTable()->fetchAll();
		$this->layout()->setVariable("quocgias",$quocgias);
	}
}
