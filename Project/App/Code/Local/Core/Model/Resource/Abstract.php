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
        if ($data[$this->getPrimaryKey()] !== '') {
            $sql = $this->updateSql(
                $this->getTableName(),
                $data,
                [$this->getPrimaryKey() => $product->getId()]
            );
            $this->getAdapter()->update($sql);
            header('Location:http://localhost/PhpPractice/Project/admin/catalog_product/list');

        } else {

            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $product->setId($id);
            header('Location:http://localhost/PhpPractice/Project/admin/catalog_product/list');

        }

        // header("Location: ". Mage::getBaseUrl('Admin/Catalog_Product/list'));
    }
    public function categorySave($product)
    {
        $data = $product->getData();
        if ($data[$this->getPrimaryKey()] !== '') {
            $sql = $this->updateSql(
                $this->getTableName(),
                $data,
                [$this->getPrimaryKey() => $product->getId()]
            );
            $this->getAdapter()->update($sql);
            header('Location:http://localhost/PhpPractice/Project/admin/catalog_category/list');

        } else {

            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $product->setId($id);
            header('Location:http://localhost/PhpPractice/Project/admin/catalog_category/list');

        }

        // header("Location: ". Mage::getBaseUrl('Admin/Catalog_Product/list'));
    }
    public function delete(Catalog_Model_Product $product)
    {
        $sql = $this->deleteSql($this->getTableName(), [$this->getPrimaryKey() => $product->getId()]);
        $this->getAdapter()->delete($sql);
        header('Location:http://localhost/PhpPractice/Project/admin/catalog_product/list');
    }
    public function categoryDelete(Catalog_Model_Category $category)
    {
        $sql = $this->deleteSql($this->getTableName(), [$this->getPrimaryKey() => $category->getId()]);
        $this->getAdapter()->delete($sql);
        header('Location:http://localhost/PhpPractice/Project/admin/catalog_category/list');
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