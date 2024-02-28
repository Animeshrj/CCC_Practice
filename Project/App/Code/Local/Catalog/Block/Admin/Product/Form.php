<?php
class Catalog_Block_Admin_Product_Form extends Core_Block_Template
{

    public function getProduct()
    {
        $id = ($this->getRequest()->getParams('id') != '') ? true : false;
        if ($id) {
            return Mage::getModel('Catalog/Product')->load($this->getRequest()->getParams('id'));
        } else {
            return Mage::getModel('Catalog/Product');
        }


    }
}