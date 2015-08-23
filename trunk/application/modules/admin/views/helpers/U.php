<?php
class Admin_View_Helper_U extends Zend_View_Helper_Abstract
{
    public function U($controller = null, $action = null, $module = 'admin', 
        $params = array(), $routeName = 'default', $reset = true, $encode = true)
    {
        $arrayMain = array('module' => $module, 'controller' => $controller, 'action' => $action);
        $arrayWithParams = array_merge($arrayMain, $params);
        $url = $this->view->url($arrayWithParams, $routeName, $reset, $encode);
        return $url;
    }
}