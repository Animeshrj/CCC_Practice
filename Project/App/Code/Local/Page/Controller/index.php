<?php

class Page_Controller_index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCSS('header.css')
            ->addJS('header.js')
            ->addCSS('footer.css')
            ->addJS('footer.js')
            ->addCSS('banner.css')
            ->addCSS('list.css');

    
        $banner = Mage::getBlock('banner/banner');
        $layout->getChild('content')
            ->addChild('banner', $banner)
            ->addChild('banner', $banner);
        $layout->toHtml();
    }
    public function testAction()
    {

    }
    public function saveAction()
    {
        $Layout = $this->getLayout()->toHtml();
    }
}