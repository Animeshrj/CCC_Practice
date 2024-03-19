<?php

class Sales_Controller_Order extends Core_Controller_Front_Action
{
    public function addAction()
    {

        Mage::getSingleton('sales/quote')->addAddress()->convert();
        // echo "place order";
    }
}
?>