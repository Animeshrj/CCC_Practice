<?php
class Sales_Controller_Quote extends Core_Controller_Admin_Action
{
    public function addAction()
    {
        // echo "ID = " . $this->getRequest()->getParams('Product_id');
        // echo "QTY = " . $this->getRequest()->getParams('qty');
        // echo "Price = " . $this->getRequest()->getParams('price');
        // echo "<pre>";

        $request = $this->getRequest()->getParams();
        $quote = Mage::getSingleton("sales/quote")
            ->addProduct($request);

    }
    public function cartAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild("content");
        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('footer.css')
            ->addCSS('list.css')
            ->addCSS('view.css');
        $cart = $layout->createBlock('sales/sales');
        $content->addChild('cart', $cart);
        $layout->toHtml();
    }
}