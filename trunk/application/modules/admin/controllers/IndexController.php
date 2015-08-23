<?php
class Admin_IndexController extends Vow_Controller_Action
{

    public function init()
    {
		//$this->_helper->layout->disableLayout();
		//$this->_helper->viewRenderer->setNoRender(true);
        /* Initialize action controller here */
    }

    public function indexAction()
    {
	   $this->_helper->layout->setLayout('main');
	   //$this->_helper->layout->disableLayout();
       //$guestbook = new Admin_Model_Guestbook();
	   //Zend_debug::dump($guestbook);
       //$this->view->form = new Front_Form_Guestbook();
    }
	
	public function defaultAction()
    {
		
    }
	
	public function bAction()
    {
		
    }


}

