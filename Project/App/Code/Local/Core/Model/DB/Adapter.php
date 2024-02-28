<?php
class Core_Model_DB_Adapter
{
    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "db" => "ccc_project",
    ];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect)) {

            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["db"],
            );
            if (!$this->connect) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
        return $this->connect;
    }
    public function fetchAll($query)
    {
        $row = [];
        $sql = mysqli_query($this->connect(),$query);
        while($_row = mysqli_fetch_assoc($sql))
        {
            $row[] = $_row;
        }
        return $row;

    }
    public function fetchPairs($query)
    {
    }
    public function fetchOne($query)
    {
    }
    public function fetchRow($query)
    {
        $row = [];
        $result = mysqli_query($this->connect(), $query);
        while ($_row = mysqli_fetch_assoc($result)) {
            $row = $_row;
        }
        return $row;
    }
    public function insert($query)
    {
        $sql = mysqli_query($this->connect(), $query);
        // echo $sql;
        if ($sql) {
            echo "<script>alert('Data inserted Succsessfully!')</script>";
            return mysqli_insert_id($this->connect());
        } else {
            return FALSE;
        }


    }
    public function update($query)
    {
        if(mysqli_query($this->connect(),$query))
        {
            echo"<script>alert('Data Updated Succsessfully!')</script>";
            return true;
        }
        else
        {
            return false;
        }
    }
    public function delete($query)
    {
        $sql = mysqli_query($this->connect(), $query);
        echo $sql;
        if($sql)
        {
            echo "<script>alert('Data deleted Succsessfully!')</script>";
            return true;
        }
        else
        {
            return false;
        }
    }
    public function query($query)
    {
    }

}
?>