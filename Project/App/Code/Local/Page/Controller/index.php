<?php

class Page_Controller_index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/navigation.js');
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('css/navigation.css');
        $layout->getChild('head')->addJs('css/navigation.css');
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