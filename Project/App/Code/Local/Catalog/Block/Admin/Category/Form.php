<?php
class Catalog_Block_Admin_Category_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("Catalog/Admin/Category/Form.phtml");
    }
    public function getCategory()
    {
        $id = ($this->getRequest()->getParams('id') != '') ? true : false;
        print_r($id);
        if ($id) {
            return Mage::getModel('Catalog/Category')->load($this->getRequest()->getParams('id'));
        } else {
            return Mage::getModel('Catalog/Category');
        }


    }
}