<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{
    protected $_allowedAction = ['login', 'register'];
    public function init()
    {
        // $this->getRequest()->getAction
        if (
            !in_array($this->getRequest()->getActionName(), $this->_allowedAction) &&
            !Mage::getSingleton('Core/Session')->get('logged_in_customer_id')
        ) {

            $this->setRedirect('customer/account/login');
        }
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('customer');
        // print_r($data);
        Mage::getModel('Customer/Account')
            ->setData($data)
            ->save();
        $this->setRedirect('customer/account/login');

    }
    public function registerAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $customerRegister = $layout->createBlock('Customer/account_register');
        $layout->getChild('head')->addCSS('customer/header.css')
            ->addCSS('footer.css')
            ->addCSS('customer/customer.css')
            // ->addJS('customer/customer.js')
            ->addJS('customer/header.js');
        $content->addChild('customerRegister', $customerRegister);
        $layout->toHtml();
    }
    public function saveRegisterAction()
    {
        $registerData = $this->getRequest()->getParams('customer');
        Mage::getModel('customer/account')
            ->setData($registerData)
            ->save();

    }
    public function dashBoardAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $customerDashboard = $layout->createBlock('customer/account_dashboard');
        $content->addChild('customerDashboard', $customerDashboard);
        $layout->toHtml();
    }
    public function forgotPasswordAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $layout->getChild('head')->addCSS('customer/header.css')
            ->addCSS('footer.css')
            ->addCSS('customer/customer.css')
            ->addCSS('form.css')
            ->addJS('customer/header.js');
        $customerForgot = $layout->createBlock('customer/account_forgotPassword');
        $content->addChild('customerForget', $customerForgot);
        $layout->toHtml();
    }
    public function listAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('footer.css')
            ->addCSS('list.css')
            ->addCSS('customer/list.css');
        $customerlist = $layout->createBlock('Customer/account_list');
        $content->addChild('list', $customerlist);
        $layout->toHtml();
    }
    public function loginAction()
    {
        if (!$this->getRequest()->isPost()) {

            $layout = $this->getlayout();
            $content = $layout->getChild('content');
            $customerlogin = Mage::getBlock('customer/account_login');
            $layout->getChild('head')->addCSS('header.css')
                ->addCSS('customer/login.css')
                ->addCSS('footer.css');
            // ->addJS('customer/login.js');
            $content->addChild('customerlogin', $customerlogin);
            $layout->toHtml();
            // $this->setRedirect('customer/account/dashboard');

        } else {
            $loginModel = Mage::getModel('customer/account');
            $login = $loginModel->setData($this->getRequest()->getPostData('login'))->login();
            $this->setRedirect(($login) ? '' : 'customer/account/login');
        }
    }

    public function logoutAction()
    {
        $session = Mage::getSingleton('core/session');
        $session->remove('logged_in_customer_id');
        echo "<script>alert:logout successfully</script>";
        $this->setRedirect('customer/account/login');
    }
}