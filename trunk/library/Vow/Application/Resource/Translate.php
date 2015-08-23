<?php
class Vow_Application_Resource_Translate extends Zend_Application_Resource_ResourceAbstract
{
	const DEFAULT_REGISTRY_KEY = 'Zend_Translate';
	
	protected $_translate;
	
	public function init()
	{
		if (null === $this->_translate) {
            $options = $this->getOptions();
            if (!isset($options['data'])) {
                require_once 'Zend/Application/Resource/Exception.php';
                throw new Zend_Application_Resource_Exception('No translation source data provided.');
            }

            $adapter = isset($options['adapter']) ? $options['adapter'] : Zend_Translate::AN_ARRAY;
            
            $sessionLocale = Zend_Registry::get('sessionLocale');
            $locale  = $sessionLocale->localename;
            
            $translateOptions = isset($options['options']) ? $options['options'] : array();

            $key = (isset($options['registry_key']) && !is_numeric($options['registry_key']))
                 ? $options['registry_key']
                 : self::DEFAULT_REGISTRY_KEY;

            if(Zend_Registry::isRegistered($key)) {
                $translate = Zend_Registry::get($key);
                if(!$translate instanceof Zend_Translate) {
                    require_once 'Zend/Application/Resource/Exception.php';
                    throw new Zend_Application_Resource_Exception($key
                                   . ' already registered in registry but is '
                                   . 'no instance of Zend_Translate');
                }

                $translate->addTranslation($options['data'], $locale, $options);
                $this->_translate = $translate;
            } else {
                $this->_translate = new Zend_Translate(
                    $adapter, $options['data'], $locale, $translateOptions
                );

                Zend_Registry::set($key, $this->_translate);
            }
        }

        return $this->_translate;
	}
}