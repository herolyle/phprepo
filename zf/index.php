<?php

	error_reporting(E_ALL|ESTRICT) ;
	date_default_timezone_set('Asia/Shanghai');
	set_include_path('.' .PATH_SEPARATOR .'./library'.PATH_SEPARATOR .'./application/models/'.PATH_SEPARATOR .get_include_path());
	require_once "Zend/Loader/Autoloader.php";
	Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true);
	$registry = Zend_Registry::getInstance();
	$view = new Zend_View();
	$view->setScriptPath('./application/views/scripts/index/');    //设置模板显示路径
	$registry['view'] = $view;  //注册View
	    //设置控制器
	$frontController =Zend_Controller_Front::getInstance();
    $frontController->setBaseUrl('/zf')   //设置基本路径
                    ->setParam('noViewRenderer', true)
                    ->setControllerDirectory('./application/controllers')
	                ->throwExceptions(true)
                    ->dispatch();
?>
