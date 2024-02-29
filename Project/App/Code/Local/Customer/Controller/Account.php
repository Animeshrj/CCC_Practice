<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{
    protected $_allowedAction = ['login', 'form'];
    public function init()
    {
        // $this->getRequest()->getAction
        if (
            !in_array($this->getRequest()->getActionName(), $this->_allowedAction) &&
            !Mage::getSingleton('Core/Session')->get('logged_in_admin_user_id')
        ) {

            $this->setRedirect("");
        }
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('customer');
        print_r($data);

        Mage::getModel('Customer/Account')
            ->setData($data)
            ->save();

    }
    public function formAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $customerForm = $layout->createBlock('Customer/account_register');
        $layout->getChild('head')->addCSS('customer/header.css')
            ->addCSS('footer.css')
            ->addCSS('customer/customer.css')
            // ->addJS('customer/customer.js')
            ->addJS('customer/header.js');
        $content->addChild('form', $customerForm);
        $layout->toHtml();
    }
    public function dashBoardAction()
    {

    }
    public function forgotPassword()
    {

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
    public function loginPostAction()
    {
        $data = $this->getRequest()->getParams('customer');
        $email = $data['customer_email'];
        $password = $data['password'];
        die;
        $customerCollection = Mage::getModel('Customer/Account')->getCollection()
            ->addFieldToFilter('customer_email', $email)
            ->addFieldToFilter('password', $password);

        $count = 0;
        $customerId = 0;

        foreach ($customerCollection->getData() as $customer) {
            $count++;
            $customerId = $customer->getID();
        }
        if ($count == 1) {
            echo "success";
            Mage::getSingleton('core/session')->set('logged_in_customer_id', $customerId);
            die;
        } else {
            echo "Login failed";
            die;
        }
    }
}