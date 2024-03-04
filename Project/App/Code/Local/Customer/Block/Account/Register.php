<?php
class Customer_Block_Account_Register extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('Customer/register.phtml');
    }
    public function getCustomerRegister()
    {
        $customerModel = Mage::getModel('Customer/Account');
        $customerId = $this->getRequest()->getParams('customer_id');
        print_r($customerId);
        if ($customerId != '') {
            $customerModel->load($customerId);
            return $customerModel;
        }
    }
}