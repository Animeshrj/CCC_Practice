<?php
include 'function.php';

if(isset($_POST['edit']))
{
    $sql = display_one("ccc_product",$_POST['Product_id']);
    $result = $conn->query($sql);

    if($result->num_row != 1)
    {
        die("Invaild ID");
    }
    $data = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Product_name <input type="text" name = "Product[Product_name]" value="<?= isset($_GET['edit'])?$data['Product_name']:""?>">
        SKU <input type="text" name = "Product[Sku]" value="<?= isset($_GET['edit'])?$data['Sku']:""?>">

        Product_type :<input type="radio" name = "Product[Product_type]" value="simple"<?= isset($_GET['edit'])&&$data['Product_type'] == "simple":""?>>simple
        <input type="radio" name = "Product[Product_type]" value="simple"<?= isset($_GET['edit'])&&$data['Product_type'] == "bundle":""?>>bundle

        Category <input type="text" name = "Product[Category]" value="<?= isset($_GET['edit'])?$data['Category']:""?>">

        Manufacturer_Cost <input type="text" name = "Product[Manufacturer_Cost]" value="<?= isset($_GET['edit'])?$data['Manufacturer_Cost']:""?>">

        Shipping_Cost <input type="text" name = "Product[Shipping_Cost]" value="<?= isset($_GET['edit'])?$data['Shipping_Cost']:""?>">

        Total_Cost <input type="text" name = "Product[Total_Cost]" value="<?= isset($_GET['edit'])?$data['Total_Cost']:""?>">

        Price <input type="text" name = "Product[Price]" value="<?= isset($_GET['edit'])?$data['Price']:""?>">

        Status <input type="text" name = "Product[Status]" value="Enable" <?= isset($_GET['edit'])&&$data['Status'] == "Enable":""?>>
        Status <input type="text" name = "Product[Status]" value="Enable" <?= isset($_GET['edit'])&&$data['Status'] == "disable":""?>>

        Created_At <input type="text" name = "Product[Created_At]" value="<?= isset($_GET['edit'])?$data['Created_At']:""?>">

        Update_At <input type="text" name = "Product[Update_At]" value="<?= isset($_GET['edit'])?$data['Update_At']:""?>">
    </form>
</body>
</html>