<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database content</title>
    <style>
        /* Add some basic styling for better presentation */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    
</body>
</html>

<?php 
$servername = "localhost";
$username = "root"; 
$password = "";
$database_name = "ccc_practice";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if (!$conn)
{
    die("Connection failed :". mysqli_connect_error());
}
else{
    echo "connection stablish";
}



    $sql = "SELECT * FROM ccc_product";
    $result = $conn->query($sql);
    
    
    if($result->num_rows > 0)
    {
        echo "<table>";
        echo "<td>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>{$row['Product_name']} - {$row['Sku']} - {$row['Product_type']} - {$row['Category']} - {$row['Manufacturer_Cost']} - {$row['Shipping_Cost']} - {$row['Total_Cost']} - {$row['Price']} - {$row['Status']} - {$row['Created_At']} - {$row['Updated_At']}</tr>"; // Replace with your actual column names
            // Add more columns as needed
        }
        echo "</td>";
    } else {
        echo "No records found.";
    }
    


?>