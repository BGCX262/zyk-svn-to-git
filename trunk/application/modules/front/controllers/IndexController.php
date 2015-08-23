<?php

class IndexController extends Vow_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
		$guestbook = new Front_Model_Guestbook();
        $this->view->form = new Front_Form_Guestbook();
    }
}