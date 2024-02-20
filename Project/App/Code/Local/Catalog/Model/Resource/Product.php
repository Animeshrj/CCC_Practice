<?php
class Catalog_Model_Resource_Product 
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

   
    public function load($id ,$colum = null)
    {
        $sql = "SELECT * FROM {$this->_tablename} WHERE  {$this->_primaryKey}  = {$id} LIMIT 1";
        // $sql = "SELECT * FROM {$this->_tablename}";

        echo "<pre>"; 
        return $this->getAdapter()->fetchRow($sql);
    }
     public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
    public function save(Catalog_Model_Product $product)
    {
        $data = $product->getData();
        printr($data);
    }
    public function getTableName()
    {
        return $this->_tablename;
    }
}