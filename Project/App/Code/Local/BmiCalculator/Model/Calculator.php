<?php
class BmiCalculator_Model_Calculator extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = "BmiCalculator_Model_Resource_Calculator";
        $this->_collectionClass = "BmiCalculator_Model_Resource_Collection_Calculator";
        $this->_modelClass = "bmicalculator/calculator";
    }
    public function getWeight()
    {
        $mapping = [0 => 'kilogram', 1 => 'pounds'];
        if (isset($this->_data['weight'])) {
            return $mapping[$this->_data['weight']];
        }
    }
    public function getHeight()
    {
        $mapping = [0 => 'meter', 1 => 'foot'];
        if (isset($this->_data['height'])) {
            return $mapping[$this->_data['height']];
        }
    }
}