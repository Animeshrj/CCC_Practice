<?php
class Customer_Model_Account extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Customer_Model_Resource_Account';
        $this->_collectionClass = 'Customer_Model_Resource_Collection_Account';
        $this->_modelClass = 'customer/account';
    }
    public function login()
    {
        $credential = $this->getData();
        $collection = $this->getCollection();
        $collection->addFieldToFilter('customer_email', $credential['customer_email'])
            ->addFieldToFilter('password', $credential['password']);
        $customer = $collection->getData();

        if (!empty($customer)) {
            $customer = $customer[0];
            $session = Mage::getSingleton('core/session');
            $session->set('logged_in_customer_id', $customer->getcustomer_id());
            return true;
        } else {
            $session = Mage::getModel('core/session');
            $session->remove('logged_in_customer_id');
            return false;

        }


    }
}