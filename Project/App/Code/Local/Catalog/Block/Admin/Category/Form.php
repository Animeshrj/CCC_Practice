<?php
class Catalog_Block_Admin_Category_Form extends Core_Block_Template
{
    public function getCategory()
    {
        $id = ($this->getRequest()->getParams('id') != '') ? true : false;
        if ($id) {
            return Mage::getModel('Catalog/Category')->load($this->getRequest()->getParams('id'));
        } else {
            return Mage::getModel('Catalog/Category');
        }


    }
}