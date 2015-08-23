<?php
class Admin_Model_Guestbook extends Zend_Db_Table
{
    protected $_name = 'guestbook';
    
    
    public function addGuestbook($date)
    {
        $this->insert($date);
    }
    
    public function fetchAllSelect()
    {
    	$select = $this->select()
    		 ->from('guestbook')
    		 //->where('username=?', 'Vow')
    		 ->order('id asc')
    		 ->limit(4,0);
    		 
    	return $select;
    }
}
