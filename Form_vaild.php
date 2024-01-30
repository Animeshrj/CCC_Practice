<?php

include 'Sql_function.php';


$servername = "localhost";
$username = "root"; 
$password = "";
$database_name = "ccc_practice";

// <--------create connection--------->
$conn = mysqli_connect($servername,$username,$password,$database_name);

if (!$conn)
{
    die("Connection failed :". mysqli_connect_error());
}
else{
    echo "connection stablish";
}

$data = $_POST['Product'];

$table = "ccc_product";
$sql_insert = insert($table,$data);


if(mysqli_query($conn,$sql_insert))
{
    // echo "<h3>Data is inserted in datbase";
    header('location:catalog/Product_list.php');
}
else
{
    echo "ERROR: Hush! Sorry". $sql. "<br>"
    . mysqli_error($conn);
}
 
    ?>