<?php
class Core_Controller_Front_Action
{
    protected $_layout = null;

    public function __construct()
    {
        $this->init();
    }
    public function init()
    {
        return $this;
    }
    public function getLayout()
    {

        if (is_null($this->_layout)) {
            $this->_layout = Mage::getBlock('Core/Layout');
        }
        return $this->_layout;
    }

    public function getRequest()
    {
        return Mage::getModel('Core/Request');
    }

    public function setRedirect($url)
    {
        header("Location: " . Mage::getBaseUrl($url));
    }
}