<?php
class Customer_Block_Account_Login extends Core_Block_Template
{
    public function __construct()
    {

        $this->setTemplate('Customer/Login.phtml');

    }
    public function getCustomerForm()
    {
        $customerModel = Mage::getModel('Customer/Account');
        $cId = $this->getRequest()->getParams('cId');
        if ($cId != '') {
            $customerModel->load($cId);
            return $customerModel;
        }
    }
}