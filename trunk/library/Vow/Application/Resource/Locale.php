<?php
class Vow_Application_Resource_Locale extends Zend_Application_Resource_ResourceAbstract
{
    const DEFAULT_REGISTRY_KEY = 'Zend_Locale';
    protected $_locale;
    
    public function init()
    {
       if (null === $this->_locale) {
            $sessionLocale = new Zend_Session_Namespace('locale');
            //Zend_Session::destroy();
            //var_dump($session->localename);
            //Zend_Debug::dump($_SESSION);exit;
            //Zend_Debug::dump(Zend_Session::getOptions());exit;
            if(isset($sessionLocale->localename)){
                $this->_locale = new Zend_Locale($sessionLocale->localename);
            }else {
                $options = $this->getOptions();
                if(!isset($options['default'])) {
                    $this->_locale = new Zend_Locale();
                } elseif(!isset($options['force']) ||
                         (bool) $options['force'] == false)
                {
                    // Don't force any locale, just go for auto detection
                    Zend_Locale::setDefault($options['default']);
                    $this->_locale = new Zend_Locale();
                } else {
                    //强制区域为...
                    $this->_locale = new Zend_Locale($options['default']);
                }
                $sessionLocale->localename = $this->_locale->getLanguage(). '_' .$this->_locale->getRegion();
            }
            
            $key = (isset($options['registry_key']) && !is_numeric($options['registry_key']))
                ? $options['registry_key']
                : self::DEFAULT_REGISTRY_KEY;
            Zend_Registry::set($key, $this->_locale);
            Zend_Registry::set('sessionLocale', $sessionLocale);
        }

        return $this->_locale;
    }
}
?>