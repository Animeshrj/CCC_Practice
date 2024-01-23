<?php
echo"<pre>";
print_r($_POST);
function insert($table,$data)
{
    $col = $val = [];
    foreach($data as $colum => $value)
    {
        $col[] = "`$colum` = '$value'"
    }
    $col = implode("," $col);
    $sql = "INSERT INTO {$table} {$col} VALUE {$VAL}";
    return sql;
}
echo insert("ccc_product",['Product_type' =>'Simple'];)


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

$Product_name = $_POST['Product_name'];
$Sku = $_POST['Sku'];
$Product_type = $_POST['Product_type'];
$Category = $_POST['Category'];
$Manufacturer_Cost = $_POST['Manufacturer_Cost'];
$Shipping_Cost = $_POST['Shipping_Cost'];
$Total_Cost = $_POST['Total_Cost'];
$Price = $_POST['Price'];
$Status = $_POST['Status'];
$Created_At = $_POST['Created_At'];
$Updated_At = $_POST['Updated_At'];

$sql = "INSERT INTO ccc_product (Product_name, Sku, Product_type, Category, Manufacturer_Cost, Shipping_Cost, Total_Cost, Price, Status, Created_At, Updated_At)VALUE('$Product_name','$Sku','$Product_type','$Category','$Manufacturer_Cost','$Shipping_Cost','$Total_Cost','$Price','$Status','$Created_At','$Updated_At')";

if(mysqli_query($conn,$sql))
{
    echo "<h3>Data is inserted in datbase";
}
else
{
    echo "ERROR: Hush! Sorry". $sql. "<br>"
    . mysqli_error($conn);
}

   mysqli_close();
    ?>