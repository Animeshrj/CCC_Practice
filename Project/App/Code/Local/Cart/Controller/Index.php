<?php
class Cart_Controller_Index extends Core_Controller_Admin_Action
{
    protected $_allowedAction = [];
    public function cartAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild("content");
        // $layout->removeChild("header");
        $cart = Mage::getBlock('cart/cart');
        $quoteId = Mage::getSingleton('core/session')->get('quote_id');
        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('footer.css')
            ->addCSS('list.css')
            ->addCSS('sales/cart.css');
        // ->addCSS('sales/cart.css');
        if ($quoteId != '') {
            $items = Mage::getModel('sales/quote_item')
                ->getCollection()
                ->addFieldToFilter('quote_id', $quoteId)
                ->getData();
            foreach ($items as $item) {
                $product = Mage::getModel('catalog/product')->load($item->getProductId());
                $item->addData('image_link', $product->getImageLink());
                $item->addData('description', $product->getDiscription());
                $item->addData('name', $product->getName());
                $item->addData('price', $product->getPrice());
            }
            $cart->addData('items', $items);
            $cart->addData('quote', Mage::getSingleton('sales/quote')->load($quoteId));

        }

        $content->addChild('cart', $cart);
        $layout->toHtml();


    }
}