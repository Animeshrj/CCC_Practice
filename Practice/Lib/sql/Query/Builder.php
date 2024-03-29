<?php


class Lib_sql_Query_Builder extends Lib_Connection
{
    public function __construct()
    {

    }

    public function insert($table, $data)
    {
        $colums = $values = [];

        foreach ($data as $key => $value) {
            // var_dump($values);
            $colums[] = sprintf("`%s`", $key);
            $values[] = sprintf("'%s'", $value);
        }
        $colums = implode(",", $colums);
        $values = implode(",", $values);

        return "INSERT INTO {$table} ({$colums}) VALUES ({$values})";
    }

    public function update($table, $data = [], $where = [])
    {
        $colums = $whereCond = [];
        foreach ($data as $datafield => $vals) {
            $colums[] = sprintf("`%s`='%s'", $datafield, $vals);
        }
        foreach ($where as $wherefield => $vals) {
            $whereCond[] = sprintf("`%s`='%s'", $wherefield, $vals);
        }
        $colums = implode(",", $colums);
        $whereCond = implode(",", $whereCond);

        return "UPDATE {$table} SET {$colums} WHERE {$whereCond}";
    }

    public function delete($table, $where = [])
    {
        $whereCond = [];
        foreach ($where as $field => $values) {
            $whereCond[] = sprintf("`%s` = '%s'", $field, $values);
        }
        $whereCond = implode(",", $whereCond);

        return "DELETE FROM {$table} WHERE {$whereCond}";
    }

    public function Select($table)
    {
        return "SELECT * FROM {$table}";

    }
    public function display_One($table, $value)
    {
        return "SELECT * FROM {$table} WHERE Product_id = {$value}";
    }
    public function display($result)
    {
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            while ($row = $result->fetch_assoc()) {
                foreach ($row as $key => $value) {
                    echo "<th>" . $key . "</th>";
                }
                break;
            }
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                $id = $row['Product_id'];
                foreach ($row as $key => $value) {
                    echo "<td>" . $value . "</td>";
                }
                ?>
                <td><a href="<?= "Product.php?delete=1?Product_id=$id" ?>"> Delete</a></td>
                <td><a href="<?= "Product.php?edit=1&Product_id=$id" ?>"> Edit</a></td>
                <?php

            }
            echo "</tr>";

        } else {
            echo "data not found";
        }
    }
}