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
        print_r($data);
        if (!is_null($data['weight_unit']) ? ($data['weight_unit'] == 'pounds') : "") {
            $weight = ($data['weight'] / 2.20462);
            $data['weight'] = $weight;
        }
        if (!is_null($data['height_unit']) ? ($data['height_unit'] == 'feet') : "") {
            $height = ($data['height'] * 3.28084);
            $data['height'] = $height;
        }
        $result = $data['weight'] / pow(($data['height']), 2);
        $calutator = Mage::getModel('Bmicalculator/calculator')
            ->setData($data);
        if ($result < 18.5) {
            $result = 'underweight';
        } elseif ($result < 24.5 && $result > 18.5) {
            $result = 'normal';
        } else {
            $result = 'obese';
        }
        $calutator->addData('result', $result);
        $calutator->removeData('height_unit')
            ->removeData('weight_unit');
        $calutator->save();
        // $this->setRedirect('bmicalculator/calulator/list');
        Mage::getSingleton('core/session')->setId('user_name', $data['user_name']);
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');
        $calculator = $layout->createBlock('bmicalculator/list');
        $content->addChild('calculator', $calculator);
        $layout->toHtml();
    }
}