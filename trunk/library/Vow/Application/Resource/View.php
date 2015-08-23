<?php
class Vow_Application_Resource_View extends Zend_Application_Resource_ResourceAbstract
{
    protected $_view;

    /**
     * To init the view
     *
     * @return Zend_View $view
     */
    public function init()
    {
        if (null === $this->_view) {
            $options = $this->getOptions();
            //var_dump($options);exit;
            $view = new Zend_View($options);

            if (!empty($options['params'])) {
                foreach ($options['params'] as $key => $value) {
                    $view->$key = $value;
                }
            }
            $view->env = $this->getBootstrap()->getEnvironment();

            $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper(
                'ViewRenderer'
            );
            $viewRenderer->setView($view);
            $this->_view = $view;
        }
		//var_dump($viewRenderer->getInflector());exit;
        return $this->_view;
    }
}
