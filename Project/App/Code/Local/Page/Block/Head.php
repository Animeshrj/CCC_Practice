<?php

class Page_Block_Head extends Core_Block_Template
{
    protected $_css =[];
    protected $_js =[];
    public function __construct()
    {
        $this->setTemplate('Page/Head.phtml');
    }
    public function addJS($file)
    {
        $this->_js[$file];
    }
    public function addCSS($file)
    {
        $this->_css[$file];
    }
    public function getJS()
    {
        return $this->_js;
    }
    public function getCSS()
    {
        return $this->_css;
    }
}