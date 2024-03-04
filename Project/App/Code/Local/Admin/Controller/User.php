<?php
class Admin_Controller_User extends Core_Controller_Admin_Action
{
    protected $_allowedAction = ['login'];

    public function loginAction()
    {
        $this->setRedirect('customer/account/login');
        
    }

}