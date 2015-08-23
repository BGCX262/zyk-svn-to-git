<?php
class Vow_Application_Resource_Cache extends Zend_Application_Resource_ResourceAbstract
{
    protected $_cache;

    /**
     * To init the view
     *
     * @return Zend_View $view
     */
    public function init()
    {
		$frontendOptions = array(
				'automatic_serialization'=> true,
				'lifetime' => 86400
		);   
		$backendOptions = array('cache_dir' => PROJECT_ROOT . '/repository/cache/');  
		
        if ('development' == APPLICATION_ENV) {
            $frontendOptions['caching'] = false;//关闭缓存
        } else {
            $classFileIncCache = $backendOptions['cache_dir'] . 'pluginLoaderCache.php';
            if (file_exists($classFileIncCache)) {
                include_once $classFileIncCache;
            }
            Zend_Loader_PluginLoader::setIncludeFileCache($classFileIncCache);
        }

        $this->_cache = Zend_Cache::factory('Core', 'File', $frontendOptions, $backendOptions);

		Zend_Db_Table_Abstract::setDefaultMetadataCache($this->_cache);//缓存Zend_Db_Table元数据
		Zend_Date::setOptions(array('cache' => $this->_cache));		   //缓存Zend_Date
		Zend_Translate::setCache($this->_cache);					   //缓存Zend_Translate
		
        Zend_Registry::set('cache', $this->_cache);
        // Return it, so that it can be stored by the bootstrap
        return $this->_cache;
    }
}
