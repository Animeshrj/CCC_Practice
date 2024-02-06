<?php
include "Lib/autoload.php";

class CCC
{
    public static function init()
    {
        $object = new Model_Request();
        $objCont = new Controller_Front();
        $objCont->init();

       
    }

}
CCC::init();
// $url = $_REQUEST[]
// // $connection = new Lib_Connection();
// // $connection->connect();

// // if(!$connection->connect())
// // {
// //     echo"connection no";
// // }
// // else
// // {
// //     echo"connection";
// // }

// $request = new Model_Request;

// if(!$request->isPost())
// {
//     $view_product = new View_Product();
//     echo $view_product->tohtml();
// }
// else{
//     $product = new Model_Product();
//     // $product->insert($request->getParams('data'));
//     $product->fetch($request->getParams('data'));

//     if(url)
//     $product->Delete($request->getQueryData('Product_id'));

//     echo "<a href = 'home' > Home </a>";
//}