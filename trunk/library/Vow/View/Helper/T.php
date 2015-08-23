<?php
class Vow_View_Helper_T extends Zend_View_Helper_Abstract
{
    public function T($string)
    {
       return $this->view->translate($string);
    }
}