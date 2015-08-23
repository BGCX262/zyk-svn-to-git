<?php
class Vow_View_Helper_E extends Zend_View_Helper_Abstract
{	
	public function E( $value, $modify, $attrib = '' )
	{
		$value = $this->view->escape($string);
		switch( $modify ){			
			/* ��ȡ�ַ���Ĭ�Ͻ�ȡ80���� */
			case 'truncate': $value = sub_str($value, (intval($attrib) ? intval($attrib) : 80), true); break;	
			/* Ϊ��������CSS��ʽ��Ĭ�Ϻ�ɫ */
			case 'style': $value = '<span style="'. ($attrib ? $attrib : 'color:#ff0000') .'">'. $value .'</span>'; break;			
			/* Ϊ����CSS���� */
			case 'class': $value = '<span'. ($attrib ? ' class="'. $attrib .'"' : '') .'>'. $value .'</span>'; break;
		}
	
		return $value;
	}
	
	/**
	 * ��ȡUTF-8���ַ����ĺ���
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