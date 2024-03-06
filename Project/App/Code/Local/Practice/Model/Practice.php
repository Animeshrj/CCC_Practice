<?php
class Practice_Model_Practice extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = "Practice_Model_Resource_Practice";
        $this->_collectionClass = "Practice_Model_Resource_Collection_Practice";
        $this->_modelClass ="practice/practice";
    }
}