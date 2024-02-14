<?php
class Model_Product extends Model_Abstract
{
    public $table = "ccc_product";
    public function __construct()
    {

    }

    public function insert($data)
    {
        echo "<pre>";
        $sql = $this->queryBuilder()->insert($this->table, $data);
        $this->queryBuilder()->exec($sql);
    }
    public function fetch($data)
    {
        echo "<pre>";
        // $sql = $this->queryBuilder()->insert($this->table,$data);

        $sql = $this->queryBuilder()->Select($this->table);
        $result = $this->queryBuilder()->exec($sql);
        //   print_r($sql);
        $this->queryBuilder()->display($result);

    }
    public function Delete($data)
    {
        if (isset($_GET['delete'])) {
            $sql = $this->queryBuilder()->delete($this->table, ['Product_id' => $data]);
            $result = $this->queryBuilder()->exec($sql);
            // print_r($result);
        }


    }
    public function update($data)
    {
        echo "<pre>";
        // $sql = $this->queryBuilder()->insert($this->table,$data);

        $sql = $this->queryBuilder()->Select($this->table);
        $result = $this->queryBuilder()->exec($sql);


    }



}