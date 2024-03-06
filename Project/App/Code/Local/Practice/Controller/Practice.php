<?php
class Practice_Controller_Practice extends Core_Controller_Front_Action
{
    public function practiceAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild("content");
        $practice = $layout->createBlock("practice/practice");
        $content->addChild("practice", $practice);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('practice');
        Mage::getModel('practice/practice')
            ->setData($data)
            ->save()
            ->getId();
    }
    public function deleteAction()
    {
        $data = $this->getRequest()->getParams('id');
        Mage::getModel('practice/practice')->load($data)
            ->setId($data)
            ->delete();
    }
    public function updateAction()
    {
        $id = $this->getRequest()->getParams('id');
        $data = ['name' => 'Animesh'];
        Mage::getModel('practice/practice')
            ->setData($data)
            ->setId($id)
            ->save();
        // print_r($practice);
        // die;
    }
    public function listAction()
    {
        $practiceCollection = Mage::getModel('practice/practice')->getCollection();

        foreach ($practiceCollection->getData() as $practice) {

            echo "<pre>";
            print_r($practice->getname());
        }

    }
}