<?php
class Model_Product extends Model_Abstract
{
    public $table = "ccc_product";
    public function __construct()
    {

    }

    public function save($data)
    {
        // echo "<pre>";
        // $sql = $this->queryBuilder()->display_One($this->table,"1");
        // print_r($sql);
        $sql = $this->queryBuilder()->display_One($this->table,"1");
        print_r($this->queryBuilder()->exec($sql));
        // print_r($sql);
    //     $result = $conn->query($sql);

    //     if($result->num_rows > 0)
    //     {
    //         echo "<table>";
    //         echo "<tr>";
    //             while ($row = $result->fetch_assoc()) {
    //                 foreach($row as $key => $value)
    //                 {
            
    //                     echo '<th>'. $key . '</th>';
    //                 }
    //                 break;
    //             }
        
    //             echo "</tr>";

    //             while ($row = $result->fetch_assoc()) {
    //             echo"<tr>";
    //             $id = $row['Product_id'];
    //                 foreach($row as $key => $value)
    //                 {         
    //                 echo '<td>'. $value . '</td>';
    //             }
            
           
    //        }
    //     echo "</tr>";
    //  }
    //  else 
    //  {
    //  echo "No records found.";
    // }
    }
}