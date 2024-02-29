<?php
class Admin_Controller_User extends Core_Controller_Admin_Action
{
    protected $_allowedAction = [];

    public function loginAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('customer/login.css')
            ->addCSS('footer.css')
            ->addJS('customer/login.js');
        $customerlogin = $layout->createBlock('Customer/account_login');
        $content->addChild('login', $customerlogin);
        $layout->toHtml();
    }

}