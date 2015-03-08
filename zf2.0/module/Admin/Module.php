<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
//use db 
use Admin\Model\Theloai;
use Admin\Model\TheloaiTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Admin\Model\Casi;
use Admin\Model\CasiTable;
use Admin\Model\Baihat;
use Admin\Model\BaihatTable;
use Admin\Model\VideoTable;
use Admin\Model\Video;
use Admin\Model\ThanhvienTable;
use Admin\Model\Thanhvien;
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
				/*'Defaults\Model\TheloaiTable' => function($sm) {
					$tableGateway = $sm->get('TheloaiTableGateway' );
					$table = new TheloaiTable($tableGateway);
					return $table;
				},
				'TheloaiTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter' );
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Theloai());
					return new TableGateway('defaults' , $dbAdapter, null, $resultSetPrototype);
				},*/
				'Admin\Model\CasiTable' => function($sm) {
					$tableGateway = $sm->get('CasiTableGateway' );
					$table = new CasiTable($tableGateway);
					return $table;
				},
				'CasiTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter' );
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Casi());
					return new TableGateway('casi' , $dbAdapter, null, $resultSetPrototype);
					
				},
				'Admin\Model\BaihatTable' => function($sm) {
					$tableGateway = $sm->get('BaihatTableGateway' );
					$table = new BaihatTable($tableGateway);
					return $table;
				},
				'BaihatTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter' );
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Baihat());
					return new TableGateway('baihat' , $dbAdapter, null, $resultSetPrototype);
				},
				'Admin\Model\VideoTable' => function($sm) {
					$tableGateway = $sm->get('VideoTableGateway' );
					$table = new VideoTable($tableGateway);
					return $table;
				},
				'VideoTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter' );
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Video());
					return new TableGateway('video' , $dbAdapter, null, $resultSetPrototype);
				},
				'Admin\Model\ThanhvienTable' => function($sm) {
					$tableGateway = $sm->get('ThanhvienTableGateway' );
					$table = new ThanhvienTable($tableGateway);
					return $table;
				},
				'ThanhvienTableGateway' => function ($sm) {
					$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter' );
					$resultSetPrototype = new ResultSet();
					$resultSetPrototype->setArrayObjectPrototype(new Thanhvien());
					return new TableGateway('thanhvien' , $dbAdapter, null, $resultSetPrototype);
				},
			),
		);
	}

}
