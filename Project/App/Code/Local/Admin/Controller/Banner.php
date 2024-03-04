<?php
class Admin_Controller_Banner extends Core_Controller_Admin_Action
{
    public function formAction()
    {
        $layout = $this->getlayout();
        $content = $layout->getChild('content');
        $bannerForm = $layout->createBlock('banner/admin_form');
        $layout->getChild('head')->addCSS('customer/header.css')
            ->addCSS('footer.css')
            ->addCSS('form.css');

        $content->addChild('form', $bannerForm);
        $layout->toHtml();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $bannerList = $layout->createBlock('banner/admin_list');
        $layout->getChild('head')->addCSS('customer/header.css')
            ->addCSS('footer.css')
            ->addCSS('list.css');
        $content->addChild('list', $bannerList);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('banner');
        $data["banner_image"] = $this->uploadFile($_FILES["banner_image"]);
        Mage::getModel('banner/banner')
            ->setData($data)
            ->save();
    }
    public function uploadFile($image)
    {
        $fileName = $image['name'];
        $tmp_name = $image["tmp_name"];
        $targetFile = Mage::getBaseDir('skin/image/media/banner/') . $fileName;
        move_uploaded_file($tmp_name, $targetFile);
        return $fileName;
    }
}