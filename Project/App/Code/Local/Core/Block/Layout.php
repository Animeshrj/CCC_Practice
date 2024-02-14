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
        $this->addChild('message', $message);
        $message->setTemplate('core/message.phtml');
        
    }
    public function createBlock($className)
    {
        return Mage :: getBlock($className);
    }

    // public function getRequest()
    // {
    //     return Mage :: 
    // }
}