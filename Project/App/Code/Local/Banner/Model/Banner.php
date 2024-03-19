<?php
class Banner_Model_Banner extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = "Banner_Model_Resource_Banner";
        $this->_collectionClass = "Banner_Model_Resource_Collection_Banner";
        $this->_modelClass = "banner/banner";
    }
    public function getStatus()
    {
        $mapping = [1 => 'Enable', 0 => 'Disable'];
        if (isset ($this->_data['status'])) {
            return $mapping[$this->_data['status']];
        }
    }
}