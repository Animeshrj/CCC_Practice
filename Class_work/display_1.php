<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

$conn = mysqli_connect($severname,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed :" . mysqli_connect_error());
}
else
{
    echo "connection stablish";   
}

$sql = "SELECT * FROM ccc_product";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    echo "<table>";
    echo "<tr>";
    while($rows = $result->fetch_assoc())
    {
        foreach ($rows as $key => $value) 
        {
            echo "<th>" . $key . "</th>";
        }
        break;
        
    }
    echo "</tr>";


    while($rows = $result->fetch_assoc())
    {
        echo "<tr>";
        $id = $rows['Product_id'];
        foreach ($rows as $key => $value) {
           
            echo "<td>" . $value . "</td>";
        }
        ?>
        <td><a href="<?="Product_list.php?delete=1&Product_id=$id"?>"> Delete</a></td>
            <td><a href="<?="Product.php?edit=1&Product_id=$id"?>"> Edit</a></td>
            <?php
    }
    echo "</tr>";
}
else{
    echo "data not found";
}