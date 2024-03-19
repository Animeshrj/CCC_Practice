<?php
class Cart_Controller_Checkout extends Core_Controller_Front_Action
{
   public function indexAction()
   {
      $layout = $this->getLayout();
      $content = $layout->getChild('content')
         ->removeChild('footer');
      $checkout = $layout->createBlock('cart/checkout');
      $content->addChild('checkout', $checkout);
      $layout->getChild('head')
         ->addCSS('footer.css')
         ->addCSS('header.css')
         ->addCSS('view.css')
         ->addCSS('sales/checkout.css');

      $layout->toHtml();
   }
}