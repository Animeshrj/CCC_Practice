<?php


class Lib_sql_Query_Builder extends Lib_Connection
{
    public function __construct()
    {

    }

    public function insert($table,$data) 
     {
        $colums = $values = [];

        foreach($data as $key => $value)
        {
            // var_dump($values);
            $colums[] = sprintf("`%s`", $key);
            $values[] = sprintf("'%s'", $value);
        }
        $colums = implode(",", $colums);
        $values = implode(",", $values);

        return "INSERT INTO {$table} ({$colums}) VALUES ({$values})";
    }

    public function update($table,$data = [],$where = [])
    {
        $colums = $whereCond = [];
        foreach($data as $datafield => $vals)
        {
            $colums[] = sprintf("`%s`='%s'",$datafield,$vals);
        }
        foreach($where as $wherefield => $vals)
        {
            $whereCond[] = sprintf("`%s`='%s'",$wherefield,$vals);
        }
        $colums = implode(",",$colums);
        $whereCond = implode(",",$whereCond);

        return "UPDATE {$table} SET {$colums} WHERE {$whereCond}";
    }

    public function delete($table,$where = [])
    {
        $colums = $whereCond = [];
        foreach($where as $field => $vales)
        {
            $whereCond[] = sprintf("`%s` = '%s'",$field,$vales);
        }
        $whereCond = implode(",",$whereCond);
        
        return "DELETE FROM {$table} WHERE {$whereCond}";
    }

    public function display($table)
    {
        return "SELECT * FROM {$table}";
    }
    public function display_One($table,$value)
    {
        return "SELECT * FROM {$table} WHERE Product_id = {$value}";
    }
}