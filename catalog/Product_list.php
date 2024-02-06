<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table data</title>
</head>
<style>
    table,th,td
    {
        border:2px solid black;
    }
</style>
<body>
    <h3>Table data</h3>
</body>
</html>

<?php
include 'sql/function.php'; 


if(isset($_GET['delete']))
{
    $sql = delete("ccc_product",['Product_id'=>$_GET['Product_id']]);
    $conn->query($sql);
    header('location:Product_list.php');
}

$sql = display("ccc_product");
// print_r($sql);
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    echo "<table>";
    echo "<tr>";
    while ($row = $result->fetch_assoc()) {
        foreach($row as $key => $value)
        {
            
            echo '<th>'. $key . '</th>';
        }
        break;
        }
        
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo"<tr>";
            $id = $row['Product_id'];
            foreach($row as $key => $value)
            {
                
                echo '<td>'. $value . '</td>';
            }
            ?>
            <td><a href="<?="Product_list.php?delete=1&Product_id=$id"?>"> Delete</a></td>
            <td><a href="<?="Product.php?edit=1&Product_id=$id"?>"> Edit</a></td>
            <?php
        }
        echo "</tr>";
    }   
    else 
    {
        echo "No records found.";
    }
//     if(isset($_POST['edit']))
// {
//     $sql = update("ccc_product",['Product_id'=>$_GET['Product_id']]);
//     $conn->query($sql);
//     header('location:Product_list.php');
// }
// $sql = display_one("ccc_product",$_POST['Product_id']);
// $result = $conn->query($sql);
    
?>