<?php
class BmiCalculator_Block_Calculator extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('BmiCalculator/Calculator.phtml');
    }
    public function sessionName()
    {
        echo Mage::getSingleton('core/session')->get('user_name');

    }
    public function sessionId()
    {
        echo Mage::getSingleton('core/session')->getId();

    }
}