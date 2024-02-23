<?php

class Core_Model_Resource_Abstract
{
    protected $_tablename = "";
    protected $_primaryKey = "";
    public function init($tableName, $primaryKey)
    {

        $this->_tablename = $tableName;
        $this->_primaryKey = $primaryKey;
    }



    public function load($id, $colum = null)
    {
        // $sql = "SELECT * FROM {$this->_tablename} WHERE  {$this->_primaryKey}  = {$id} LIMIT 1";
        $sql = "SELECT * FROM {$this->_tablename}";

        echo "<pre>";
        return $this->getAdapter()->fetchAll($sql);
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
        if (isset($data[$this->_primaryKey])) {
            unset($data[$this->_primaryKey]);
        }
        $sql = $this->insertSql($this->getTableName(), $data);
        $id = $this->getAdapter()->insert($sql);
        $product->setId($id);

        // header("Location: ". Mage::getBaseUrl('Admin/Catalog_Product/list'));
    }
    public function delete(Catalog_Model_Product $product)
    {
        $id = $product->getId();
        $sql = "DELETE FROM " . $this->getTableName() . " WHERE " . $this->getPrimaryKey() . '=' . $id;
        print_r($sql);
        $id = $this->getAdapter()->delete($sql);
    }
    public function insertSql($tbname, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $val) {
            $columns[] = "`{$key}`";
            $values[] = "'" . addslashes($val) . "'";
        }
        $columns = implode(" , ", $columns);
        $values = implode(" , ", $values);

        return "INSERT INTO {$tbname} ({$columns}) VALUES ({$values})";
    }
    public function deleteSql($id)
    {

    }
    public function getTableName()
    {
        return $this->_tablename;
    }

}