<?php
class Banner_Block_Admin_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('banner/admin/banner/form.phtml');
    }
    public function getBanner()
    {
        $id = ($this->getRequest()->getParams('id') != '') ? true : false;
        if ($id) {
            return Mage::getModel('Banner/banner')->load($this->getRequest()->getParams('id'));
        } else {
            return Mage::getModel('Banner/banner');
        }


    }
}