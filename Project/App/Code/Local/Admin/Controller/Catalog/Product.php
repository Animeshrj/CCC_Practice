<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    protected $_allowedAction = ['form'];
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('Product');
        Mage::getModel('Catalog/Product')
            ->setData($data)
            ->save()
            ->getId();
        $this->setRedirect('admin/catalog_product/list');
        // echo"<pre>";      
        // print_r($product);
        // return $product;
    }
    public function deleteAction()
    {
        $id = $this->getRequest()->getParams('id');
        $product_model = Mage::getModel("Catalog/Product")->load($id);
        $product_model->setId($id);
        $product_model->delete();
        $this->setRedirect('admin/catalog_product/list');
        return $product_model;
        // ($product_model);
    }
    public function listAction()
    {

        $layout = $this->getlayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('footer.css')
            ->addCSS('list.css');
        $productlist = $layout->createBlock('Catalog/admin_product_list');
        $child->addChild('list', $productlist);
        $layout->toHtml();
    }

    public function formAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('footer.css')
            ->addCSS('form.css');
        $productform = $layout->createBlock('Catalog/admin_product_form');
        $content->addChild('form', $productform);
        $layout->toHtml();
    }




}