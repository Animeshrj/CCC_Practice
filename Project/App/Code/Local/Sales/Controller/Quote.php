<?php
class Sales_Controller_Quote extends Core_Block_Template
{
    public function addAction()
    {
        echo "ID = " . $this->getRequest()->getParams('cart[Product_id]');
        echo "QTY = " . $this->getRequest()->getParams('cart[qty]');
        echo "<pre>";
        $request = $this->getRequest()->getParams('cart');
        $quote = Mage::getSingleton("sales/quote")
            ->addProduct($request);

    }
}