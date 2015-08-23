<?php
class Vow_View_Helper_Js extends Zend_View_Helper_Abstract
{
	protected $_container = array();
	
	protected function _isvalid($value)
	{
		return true;
	}
	
	public function js()
	{
		return $this;
	}
	
    public function append($value)
    {
        if (!$this->_isValid($value)) {
            require_once 'Zend/View/Exception.php';
            throw new Zend_View_Exception('append() expects a data token; please use one of the custom append*() methods');
        }

        array_push($this->_container, $value);
        return $this;
    }

    public function prepend($value)
    {
        if (!$this->_isValid($value)) {
            require_once 'Zend/View/Exception.php';
            throw new Zend_View_Exception('prepend() expects a data token; please use one of the custom prepend*() methods');
        }

        array_unshift($this->_container, $value);
        return $this;
    }
	
    public function __toString()
    {
    	$html = '';
    	
    	if(!empty($this->_container)){
    		$href = $this->view->pathJs . 'js.php?';
    		$i = 0;
    		foreach ($this->_container as $item){
    			$i++;
    			$href .= "f$i=$item&amp;";
    		}
    		$html = '<script type="text/javascript" src="' . rtrim($href, "&amp;") . '"></script>';
    	}
    	
    	return $html;
    }
}