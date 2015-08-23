<?php
/* Define path to project root */
defined('PROJECT_ROOT')
		|| define('PROJECT_ROOT',
			      realpath(dirname(dirname(__FILE__))));

/* Define path to application directory */
defined('APPLICATION_PATH')
		|| define('APPLICATION_PATH',
				  PROJECT_ROOT . '/application');
				  
/* Define application environment */
defined('APPLICATION_ENV')
		|| define('APPLICATION_ENV',
				  getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development');

/* Set include paths */
set_include_path(implode(DIRECTORY_SEPARATOR, array(
				PROJECT_ROOT . '/library',
				//get_include_path()
)));

/* Zend_Application */
require_once 'Zend/Application.php';

/* Create application */
$application = new Zend_Application(
			APPLICATION_ENV,
			APPLICATION_PATH . '/configs/application.ini'
);

/* We need to know the warnings when develop */
if('production' !== APPLICATION_ENV){
	$application->getAutoloader()->suppressNotFoundWarnings(false);
}

/* Run */
$application->bootstrap()
			->run();