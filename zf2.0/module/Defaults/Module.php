<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Defaults;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
//use db 
use Defaults\Model\Theloai;
use Defaults\Model\TheloaiTable;
use Defaults\Model\Quocgia;
use Defaults\Model\QuocgiaTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
	
	//use db
	public function getServiceConfig(){
		return array(
			'factories' => array(
				'Defaults\Model\TheloaiTable' => function($sm) {
					$tableGateway = $sm->get('TheloaiTableGateway' );
					$table = new TheloaiTable($tableGateway);
					return $table;
				},
				'TheloaiTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter' );
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Theloai());
					return new TableGateway('theloai' , $dbAdapter, null, $resultSetPrototype);
				},
				'Defaults\Model\QuocgiaTable' => function($sm) {
					$tableGateway = $sm->get('QuocgiaTableGateway' );
					$table = new QuocgiaTable($tableGateway);
					return $table;
				},
				'QuocgiaTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter' );
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Quocgia());
					return new TableGateway('quocgia' , $dbAdapter, null, $resultSetPrototype);
				},
			),
		);
	}

}
