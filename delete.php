<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form page</title>
    <link rel="stylesheet" href="Style.css" />
  </head>
  <body class="form">
    <form action="" method="post">
        <select name="wheredeletecol" id="">
          <option>Product_id</option>
          <option>Product_name</option>
          <option>Sku</option>
          <option>Category</option>
          <option>Manufacturer Cost</option>
          <option>Shipping Cost</option>
          <option>Total Cost </option>
          <option>Price </option>
          <option>Status</option>
          <option>Created At</option>
          <option>Updated At</option>
        </select>
        <br />
        <label for="">Enter the value to check</label>
        <input type="text" name="wheredeleterow" />
        <br />
        <input type="submit" value="submit" />
      </div>
    </form>
  </body>
</html>

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

$table = "ccc_product";
$wheredeletecol = $_POST['wheredeletecol'];
$wheredeleterow = $_POST['wheredeleterow'];
$wheredelete = array($wheredeletecol => $wheredeleterow);

 $sql_delete = delete($table,$wheredelete);

if(mysqli_query($conn,$sql_delete))
{
    echo "<h3>Data is deleted in datbase";
    
}
else
{
    echo "ERROR: Hush! Sorry". $sql. "<br>"
    . mysqli_error($conn);
}

   mysqli_close($conn);
?>



