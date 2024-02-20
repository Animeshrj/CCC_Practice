<?php
class Core_Model_DB_Adapter
{
    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "db" => "ccc_practice",
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
        // $row = [];
        // $this->connect();
        // $result = mysqli_query($this->connect,$query);
        // if($result->num_rows > 0 )
        // echo "<table style='border:2px solid black;'>";
        // echo"<tr>";
        // while ($_row = mysqli_fetch_assoc($result)) {
        //     foreach($_row as $key => $value)
        //     {
        //         echo "<th style='border:2px solid black;'>". $key . "</th>";

        //     }
        //     break;
        // }
        // echo "</tr>";

        // while ($_row = mysqli_fetch_assoc($result)) {
        //     echo"<tr>";
        //     foreach($_row as $key => $value)
        //     echo "<th style='border:2px solid black;'>". $value . "</th>";
        // }
        // echo"</tr>";
        // echo"</table>";

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
      
        // print_r($this->connect);
        $result = mysqli_query($this->connect(), $query);
        while ($_row = mysqli_fetch_assoc($result)) {
            $row = $_row;
        }
        return $row;
    }
    public function insert($query)
    {
       
        $result = mysqli_query($this->connect(),$query);
       
    }
    public function update($query)
    {
    }
    public function delete($query)
    {
    }
    public function query($query)
    {
    }

}
?>
