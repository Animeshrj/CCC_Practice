<?php
class Catalog_Block_Admin_Product_Form extends Core_Block_Template
{
    public function __construct()
    {

        $this->setTemplate("Catalog/Admin/Product/Form.phtml");
    }

    public function getProduct()
    {
        $id = ($this->getRequest()->getParams('id') != '') ? true : false;
        print_r($id);
        if ($id) {
            return Mage::getModel('Catalog/Product')->load($this->getRequest()->getParams('id'));
        } else {
            return Mage::getModel('Catalog/Product');
        }
        // echo "getProduct";

    }
}