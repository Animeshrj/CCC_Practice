<?php
class Catalog_Controller_Product extends Core_Controller_Front_Action
{
    public function viewAction()
    {


        $layout = $this->getLayout();
        // $layout->removeChild("footer");
        $child = $layout->getChild('content');
        // $child->removeChild(  );
        $view = $layout->createBlock("catalog/admin_product_view");

        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('footer.css')
            ->addCSS('list.css')
            ->addCSS('view.css');
        $child->addChild("view", $view);
        $layout->toHtml();
    }
}