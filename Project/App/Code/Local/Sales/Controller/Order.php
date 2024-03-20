<?php

class Sales_Controller_Order extends Core_Controller_Front_Action
{
    // public function saveAddressAction()
    // {
    //     Mage::getSingleton('core/session')->get('quote_id');
    // }
    public function saveAction()
    {

        Mage::getSingleton('sales/quote')->convert();
        // echo "place order";
    }
}
?>