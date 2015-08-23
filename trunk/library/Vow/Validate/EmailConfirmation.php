<?php 
class Vow_Validate_EmailConfirmation extends Zend_Validate_Abstract 
{
    const NOT_MATCH = 'emailConfirmationNotMatch';

    protected $_messageTemplates = array(
        self::NOT_MATCH => '两次输入的Email不匹配!'
    );

    /**
     * Check if the element using this validator is valid
     *
     * This method will compare the $value of the element to the other elements
     * it needs to match. If they all match, the method returns true.
     *
     * @param $context array validate data
     * @return boolean Returns true if the element is valid
     */
    public function isValid($context) 
    {
        if (is_array($context)) {
        	$keys = array_keys($context);
        	
        	$value = (string) $context[$keys[0]];
        	$this->_setValue($value);
        	
            if (isset($context[$keys[0]], $context[$keys[1]]) 
                	&& ($context[$keys[0]] == $context[$keys[1]]))
            {
            	return true;
                
            }
        }
        
        $this->_error(self::NOT_MATCH);
        return false;
    }
}