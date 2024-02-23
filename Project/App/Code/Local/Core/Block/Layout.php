<?php
class Core_Block_Layout extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('Core/Name.phtml');
        $this->prepareChildren();
        
    }
    public function prepareChildren()
    {
        $header = $this->createBlock('Page/Header');
        $this->addChild('header', $header);

        $footer = $this->createBlock('Page/Footer');
        $this->addChild('footer', $footer);

        $head = $this->createBlock('Page/Head');
        $this->addChild('head', $head);

        $content = $this->createBlock('Page/Content');
        $this->addChild('content', $content);

        $message = $this->createBlock('Core/Template');
        $message->setTemplate('Core/messages.phtml');
        $this->addChild('message', $message);
        
    }
    public function createBlock($className)
    {
        return Mage :: getBlock($className);
    }

    public function getRequest()
    {
        return Mage :: getModel('Core/Request');
    }
}