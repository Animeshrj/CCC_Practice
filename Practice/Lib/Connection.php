<?php
class Lib_Connection
{
    protected $_conn = null;

    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        if (is_null($this->_conn)) {
            $this->_conn = mysqli_connect("localhost", "root", "", "ccc_practice");
            // echo $this->_conn;

            if ($this->_conn === "false") {
                die("<h3 style = 'color: red;'>ERROR:CONNECTION NO STABLISH" . mysqli_connect_error() . "</h3>");
            }
        }

        return $this->_conn;
    }
    public function exec($sql)
    {
        try {
            $test = $this->connect()->query($sql);
            return $test;

        } catch (Exception $e) {

            var_dump($e->getMessage());
        }
    }
}



?>