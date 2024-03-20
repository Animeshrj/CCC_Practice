<?php
class Sales_Controller_Quote extends Core_Controller_Admin_Action
{
    public function addAction()
    {
        // echo "order place";
        // die;
        $request = $this->getRequest()->getPostData();
        Mage::getSingleton("sales/quote")
            ->addProduct($request);
        $this->setRedirect('cart/index/cart');

    }

    public function saveAction()
    {
        $paymentData = $this->getRequest()->getPostData('payment');
        $addressData = $this->getRequest()->getPostData('address');
        $shippingData = $this->getRequest()->getPostData('shipping');

        Mage::getSingleton('sales/quote')
            ->addAddress($addressData)
            ->addPaymentMethod($paymentData)
            ->addShippingtMethod($shippingData)
            ->convert();
        $this->setRedirect('cart/index/cart');
    }

}