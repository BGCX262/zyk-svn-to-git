<?php
class Zend_View_Helper_Date extends Zend_View_Helper_Abstract
{
	public function date($dateString = null)
	{
		/*$date = new Zend_Date();
		Zend_Debug::dump($date->getDate($_SESSION['locale']['localename']));
		Zend_Debug::dump($date->getTimestamp());
		Zend_Debug::dump($date->get(Zend_Date::DATE_FULL));
        Zend_Debug::dump($date->toString("YYYY-MM-dd HH:mm:ss"));*/
		//Zend_Date::setOptions(array('format_type' => 'php'));
		//$date = new Zend_Date($dateString, Zend_Date::TIMESTAMP); //locale在1.70后默认会从注册表中寻找Zend_Locale
		$date = new Zend_Date();
        $date->set($dateString, Zend_Date::TIMESTAMP);//表示$dateString的类型
        return $date->get(Zend_Date::DATE_FULL);
	}
}