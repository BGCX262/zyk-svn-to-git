<?php
class Vow_Controller_Plugin_Initializer extends Zend_Controller_Plugin_Abstract
{
	public function routeShutdown(Zend_Controller_Request_Abstract $request){
	    $bootstrap = Zend_Controller_Front::getInstance()->getParam('bootstrap');
	    /*$layout = $bootstrap->getResource('Layout');
	    $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper(
                'ViewRenderer'
            );
	    Zend_Debug::dump($viewRenderer->getInflector());exit;*/
		$module = $request->getModuleName();
				
		$view = $bootstrap->getResource('View');
        $moduleParams = $view->$module;
		
		/*
		//setup theme
		if($module == 'front'){
			$style = $request->getQuery('style', $moduleParams['style']);
			$view->addBasePath(APPLICATION_PATH . "/modules/$module/views/" . $style);
		}*/
		
		//setup layout
		$layout = $bootstrap->getResource('Layout');
        $layout->setLayoutPath($moduleParams['layoutPath'])
               ->setLayout($moduleParams['layout']);
	}
	
	public function postDispatch(Zend_Controller_Request_Abstract $request)
	{
	    if ($request->getControllerName() != 'language') {
	        if(Zend_Registry::isRegistered('sessionUrl')){
	            $sessionUrl = Zend_Registry::get('sessionUrl');
	        }else {
	            $sessionUrl = new Zend_Session_Namespace('currentRail'); 
	        }
            $sessionUrl->currentRail = $_SERVER['REQUEST_URI'];
        }
	}
}