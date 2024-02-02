<?php
include "Lib/autoload.php";

// $connection = new Lib_Connection();
// $connection->connect();

// if(!$connection->connect())
// {
//     echo"connection no";
// }
// else
// {
//     echo"connection";
// }

$request = new Model_Request;

if(!$request->isPost())
{
    $view_product = new View_Product();
    echo $view_product->tohtml();
}
else{
    $product = new Model_Product();
    $product->save($request->getParams('data'));
}