<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "ccc_practice";

$conn = mysqli_connect($severname, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed :" . mysqli_connect_error());
} else {
    echo "connection stablish";
}


if (isset($_GET['delete'])) {

    $sql = delete("ccc_product", ['Product_id' => $_GET['Product_id']]);
    $conn->query($sql);
}
if (isset($_POST['Update'])) {
    $data = $_POST['Product'];
    $sql = Update("ccc_product", $data, ['Product_id' => $_GET['Product_id']]);
    var_dump($sql);
    $conn->query($sql);
}
if (isset($_GET['edit'])) {
    $sql = display_One_Row("ccc_product", $_GET['Product_id']);
    $result = $conn->query($sql);
    if ($result->num_rows != 1) {
        die("Invaild row");
    }
    $data = $result->fetch_assoc();
}
$sql = "SELECT * FROM ccc_product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    while ($rows = $result->fetch_assoc()) {
        foreach ($rows as $key => $value) {
            echo "<th>" . $key . "</th>";
        }
        break;

    }
    echo "</tr>";


    while ($rows = $result->fetch_assoc()) {
        echo "<tr>";
        $id = $rows['Product_id'];
        foreach ($rows as $key => $value) {

            echo "<td>" . $value . "</td>";
        }
        ?>
        <td><a href="<?= "display_1.php?delete=1&Product_id=$id" ?>"> Delete</a></td>
        <td><a href="<?= "display_1.php?edit=1&Product_id=$id" ?>"> Edit</a></td>
        <?php
    }
    echo "</tr>";
} else {
    echo "data not found";
}

function delete($table, $where = [])
{
    $whereCond = [];
    foreach ($where as $key => $value) {
        $whereCond[] = "`$key` = '$value'";

    }
    $whereCond = implode(",", $whereCond);
    $sql = "DELETE FROM {$table} WHERE {$whereCond}";
    return $sql;
}

function Update($table, $data = [], $where = [])
{
    $colums = $whereCond = [];
    foreach ($data as $field => $val) {
        $colums[] = " `$field` = '$val'";
    }

    foreach ($where as $keys => $values) {
        $whereCond[] = " `$keys` = '$values'";
    }
    $colums = implode(",", $colums);
    $whereCond = implode(" AND ", $whereCond);

    $sql = "UPDATE {$table} SET {$colums} WHERE {$whereCond}";
    return $sql;
}

function display_One_Row($table, $value)
{
    $sql = "SELECT * FROM {$table} WHERE Product_id = {$value}";
    return $sql;
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
        <div>
            Product name<input type="text" name="Product[Product_name]"
                value="<?= isset($_GET['edit']) ? $data['Product_name'] : "" ?>">
            <br>
            Sku<input type="text" name="Product[Sku]" value="<?= isset($_GET['edit']) ? $data['Sku'] : "" ?>">
            <br>
            Shipping_Cost<input type="text" name="Product[Shipping_Cost]"
                value="<?= isset($_GET['edit']) ? $data['Shipping_Cost'] : "" ?>">
            <br>
            <input type="submit" name="<?= isset($_GET['edit']) ? "Update" : "submit" ?>"
                value="<?= isset($_GET['edit']) ? "Update" : "submit" ?>" />
        </div>
    </form>
</body>

</html>