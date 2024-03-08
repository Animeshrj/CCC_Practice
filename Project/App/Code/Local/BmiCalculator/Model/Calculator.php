<?php
class BmiCalculator_Model_Calculator extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = "BmiCalculator_Model_Resource_Calculator";
        $this->_collectionClass = "BmiCalculator_Model_Resource_Collection_Calculator";
        $this->_modelClass = "bmicalculator/calculator";
    }
   

    public function __beforesave()
    {
        if($this->getWeight() == 'kilogram' )
        {
            $result = $this->getWeight();   
            $this->addData('result', $result);
        }
        elseif($this->getWeight() == 'pounds')
        {
            $result = ($this->getWeight()/2.20462);
        }

        if($this->getHeight() == 'meter')
        {
            $result = $this->getHeight();
            $this->addData('result', $result);
        }
        elseif($this->getHeight()== 'foot')
        {
            $result = ($this->getHeight()/3.28084);
            $this->addData('result',$result);
        }
    }
}