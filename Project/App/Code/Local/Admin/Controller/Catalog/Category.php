<?php
class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $layout->getChild('head')
            ->addCSS('footer.css')
            ->addCSS('form.css')
            ->addCSS('header.css');
        $categoryForm = $layout->createBlock('Catalog/admin_category_form')
            ->setTemplate('Catalog/Admin/Category/Form.phtml');
        $content->addChild('form', $categoryForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('category');
        Mage::getModel('Catalog/Category')
            ->setData($data)
            ->categorySave();

    }
    public function deleteAction()
    {
        $id = $this->getRequest()->getParams('id');
        $category_model = Mage::getModel("Catalog/Category")->load($id);
        $category_model->setId($id);
        $category_model->categoryDelete();
        return $category_model;

    }
    public function listAction()
    {

        $layout = $this->getlayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCSS('header.css')
            ->addCSS('footer.css')
            ->addCSS('list.css');
        $categorylist = $layout->createBlock('Catalog/admin_category_list');
        $child->addChild('list', $categorylist);
        $layout->toHtml();
    }

}