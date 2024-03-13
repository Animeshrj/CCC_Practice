<?php
class Customer_Block_Account_Register extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('Customer/register.phtml');
    }
    public function getCustomerRegister()
    {
        $id = ($this->getRequest()->getParams('id') != '') ? true : false;
        if ($id) {
            return Mage::getModel('customer/account')->load($this->getRequest()->getParams('id'));
        } else {
            return Mage::getModel('customer/account');
        }
    }
}