<?php
class BmiCalculator_Controller_Calculator extends Core_Controller_Front_Action
{
    public function calculatorAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $calculator = $layout->createBlock('bmicalculator/calculator');
        $content->addChild('calculator', $calculator);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('calculator');
        
        Mage::getModel('Bmicalculator/calculator')
                ->setData($data)
                ->save();
         
    }
}