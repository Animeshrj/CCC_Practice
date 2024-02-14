<?php
class Product_Model_Resource_Product 
{
    protected $_tablename ="";
    protected $_primaryKey = "";
    public function init($tableName,$primaryKey)
    {
        $this->_tablename = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function __construct()
    {
        $this->init('ccc_product','Product_id');
    }
}