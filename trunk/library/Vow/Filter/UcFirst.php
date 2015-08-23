<?php
class Vow_Filter_UcFirst extends Zend_Filter_Inflector
{
    public function filter($value)
    {
        return ucfirst($value);
    }
}