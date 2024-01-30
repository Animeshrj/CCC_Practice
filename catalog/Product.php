<?php
include 'sql/function.php';
if(isset($_GET['edit']))
{
    $sql = display_one("ccc_product",$_GET['Product_id']);
    $res = $conn->query($sql);
    if($res->num_rows != 1)
        die('Invalid Product ID');
    $data = $res->fetch_assoc();
    // print_r($data);
   
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

.dropbtn {
  background-color: #127fa1;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #27c2e5;
}

.form {
  display: flex;
  justify-content: center;
  margin: 6%;
  border: 2px solid black;
  border-radius : 10px;

}
label
{
 font-size: 1.5em;
 /* margin: 50px 0px 0px 0px; */
 /* border: 2px solid black; */
 justify-content: space-between;
 text-align: justify;
}
input
{
  font-size: 1.5em;
  margin-top: 10px;
  display:flex;
  justify-content:center;
  border:2px solid blue;
}
select
{
  font-size: 1em;
  margin-top: 10px;
}
    </style>
</head>
<body>
    <div class="form">
    <form action="" method="POST">
        Product_name <input type="text" name = "Product[Product_name]" value="<?= isset($_GET['edit'])?$data['Product_name']:""?>">
        <br>
        SKU <input type="text" name = "Product[Sku]" value="<?= isset($_GET['edit'])?$data['Sku']:""?>">
        <br>
        Product_type :<input type="radio" name = "Product[Product_type]" value="simple"<?= isset($_GET['edit'])&&$data['Product_type'] == "simple" ;""?>>simple
        <input type="radio" name = "Product[Product_type]" value="simple"<?= isset($_GET['edit'])&&$data['Product_type'] == "bundle";""?>>bundle
        <br>
        Category <input type="text" name = "Product[Category]" value="<?= isset($_GET['edit'])?$data['Category']:""?>">
        <br>
        Manufacturer_Cost <input type="text" name = "Product[Manufacturer_Cost]" value="<?= isset($_GET['edit'])?$data['Manufacturer_Cost']:""?>">
        <br>
        Shipping_Cost <input type="text" name = "Product[Shipping_Cost]" value="<?= isset($_GET['edit'])?$data['Shipping_Cost']:""?>">
        <br>
        Total_Cost <input type="text" name = "Product[Total_Cost]" value="<?= isset($_GET['edit'])?$data['Total_Cost']:""?>">
        <br>
        Price <input type="text" name = "Product[Price]" value="<?= isset($_GET['edit'])?$data['Price']:""?>">
        <br>
        Status
        <select>
            <option type="text" name = "Product[Status]" value="Enable" <?= isset($_GET['edit'])&&$data['Status'] == "Enable";""?>>Enable</option>
            <option type="text" name = "Product[Status]" value="Enable" <?= isset($_GET['edit'])&&$data['Status'] == "disable";""?>>Disable</option>
            
        </select> 
        <br>
        Created_At <input type="date" name = "Product[Created_At]" value="<?= isset($_GET['edit'])?$data['Created_At']:""?>">
        <br>
        Updated_At <input type="date" name = "Product[Updated_At]" value="<?= isset($_GET['edit'])?$data['Updated_At']:""?>">
        <br>
        <input type="submit" name = "<?= isset($_GET['edit'])?"update":"submit" ?>" value= "<?= isset($_GET['edit'])?"update":"submit" ?>"/><br/>
    </form>
    </div>
</body>
</html>

<?php

if(isset($_POST['update']))
{
    $data = $_POST['Product'];
    $sql = Update("ccc_product",$data,['Product_id' => $_GET['Product_id']]);
    // print_r($sql);
    $conn->query($sql);
    header('location:Product_list.php');
}
?>