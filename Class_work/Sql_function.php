<?php
echo "<pre>";
print_r($_POST);
function insert($table, $data)
{
    $col = $val = [];
    foreach ($data as $colum => $value) {
        $col[] = "`$colum`";
        $val[] = "'$value'";
    }
    $col = implode(",", $col);
    $val = implode(",", $val);
    $sql = "INSERT INTO {$table} ({$col}) VALUES ({$val})";
    return $sql;
}

function Update($table, $d = [], $where = [])
{
    $colums = $whereCond = [];
    foreach ($d as $field => $val) {
        $colums[] = "`$field` = '$val'";
    }

    foreach ($where as $field => $val) {
        $whereCond[] = "`$field` = '$val'";
    }
    $colums = implode(",", $colums);
    $whereCond = implode(" AND ", $whereCond);

    $sql = "UPDATE {$table} SET {$colums} WHERE {$whereCond}";
    return $sql;
}
// 

function Delete($table, $where = [])
{
    $colums = $whereCond = [];
    foreach ($where as $field => $val) {
        $whereCond[] = "`$field` = '$val'";
    }
    $whereCond = implode(",", $whereCond);
    $sql = "DELETE FROM {$table} WHERE {$whereCond}";
    return $sql;
}
// 
?>