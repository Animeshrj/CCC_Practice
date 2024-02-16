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

    // public function getAdapter()
    // {
    //     return new Core_Model_DB_Adapter;
    // }

    // public function getData($id='',$colum = null)
    // {
    //     $sql = 'SELECT * FROM ' . $this->_tablename .' WHERE '. $this->_primaryKey .' = '.$id;
    //     $data = $this->getAdapter()->fetchAll($sql);
    //     return $data;
    // }
}