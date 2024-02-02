<?php
class Model_Abstract
{
    public function queryBuilder()
    {
        return new Lib_sql_Query_Builder();
    }
}

// echo "Abstract";
?>