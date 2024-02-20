<?php
class Core_Controller_Front_Action 
{
    protected $_layout = null;
    public function getLayout()
    {
        if (is_null($this->_layout)) {
            $layout = Mage::getBlock('Core/Layout');
            return $layout;
            // echo "Getlayout";
        }
        return $this->_layout;
    }
    public function getRequest()
    {
        return Mage::getModel('Core/Request');
    }
}