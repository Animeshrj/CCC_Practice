<?php
class Core_Controller_Front_Action extends Core_Block_Template
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
}