<?php
class Catalog_Controller_Product extends Core_Controller_Front_Action
{
    public function newAction()
    {
        $layout = $this->getlayout();
        $child = $layout->getChild('content');

        $productfrom = $layout->createBlock('Catalog/admin_product');
        $child->addChild('form',$productfrom);
        $layout->toHtml(); 
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams();
        $product = Mage::getModel('Catalog/Product')
                ->setData($data);
                
        echo"<pre>";

    }
}