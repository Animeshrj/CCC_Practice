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
        $sql = "SELECT * FROM {$this->_tablename} WHERE  {$this->_primaryKey}  = {$id} LIMIT 1";
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
    public function getTableName()
    {
        return $this->_tablename;
    }
    public function save($product)
    {
        $data = $product->getData();
        if ($product->getId() !== '') {
            $sql = $this->updateSql(
                $this->getTableName(),
                $data,
                [$this->getPrimaryKey() => $product->getId()]
            );
            $this->getAdapter()->update($sql);

        } else {

            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $product->setId($id);

        }

        // header("Location: ". Mage::getBaseUrl('Admin/Catalog_Product/list'));
    }

    public function delete(Core_Model_Abstract $product)
    {
        $sql = $this->deleteSql($this->getTableName(), [$this->getPrimaryKey() => $product->getId()]);
        $this->getAdapter()->delete($sql);
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
    public function deleteSql($tablename, $where)
    {
        $whereCond = [];
        foreach ($where as $_field => $_value) {
            $whereCond[] = "`$_field` = '$_value'";
        }
        $whereCond = implode(" AND ", $whereCond);
        return "DELETE FROM `{$tablename}`  WHERE {$whereCond};";
    }


    public function updateSql($tablename, $data, $where)
    {
        $coloumns = $whereCond = [];

        foreach ($data as $_field => $_value) {
            $coloumns[] = "`{$_field}`= " . "'" . ($_value) . "'";

        }
        $coloumns = implode(", ", $coloumns);

        foreach ($where as $_field => $_value) {
            $whereCond[] = "`$_field` = " . "'" . ($_value) . "'";

        }
        $whereCond = implode(" AND ", $whereCond);
        return "UPDATE {$tablename} SET {$coloumns} WHERE {$whereCond}";

    }
}