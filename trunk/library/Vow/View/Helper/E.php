<?php
class Vow_View_Helper_E extends Zend_View_Helper_Abstract
{	
	public function E( $value, $modify, $attrib = '' )
	{
		$value = $this->view->escape($string);
		switch( $modify ){			
			/* 截取字符。默认截取80个字 */
			case 'truncate': $value = sub_str($value, (intval($attrib) ? intval($attrib) : 80), true); break;	
			/* 为变量增加CSS样式，默认红色 */
			case 'style': $value = '<span style="'. ($attrib ? $attrib : 'color:#ff0000') .'">'. $value .'</span>'; break;			
			/* 为变量CSS类名 */
			case 'class': $value = '<span'. ($attrib ? ' class="'. $attrib .'"' : '') .'>'. $value .'</span>'; break;
		}
	
		return $value;
	}
	
	/**
	 * 截取UTF-8下字符串的函数
	 * 
	 * @param string  $str
	 * @param int	$length
	 * @param bool $append
	 * 
	 * @return string
	 */
	protected static function sub_str($str, $length = 0,$append = true){
		$str = trim($str);
		$strlength = strlen($str);
		
		if($length == 0 || $length >= $strlength){
			return false;
		}else if($length < 0){
			$length = $strlength + $length;
			if($length < 0){
				$length = $strlength;
			}
		}
		
		if(function_exists('mb_substr')){
			$newstr = mb_substr($str, 0, $length, 'UTF-8');
		}else if(function_exists('iconv_substr')){
			$newstr = iconv_substr($str, 0, $length, 'UTF-8');
		}else {
			$newstr = substr($str, 0, $length);
		}
		
		if($append && $str != $newstr){
			$newstr .= '...';
		}
		return $newstr;
	}

}