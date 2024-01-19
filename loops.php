<?php
//for loop
// echo "These are odd numbers";

// for($i = 1;$i<=20;$i+=2)
// {
//     echo $i." ";
// }

//While loop
$num = 0;
$sum = 0;
while ($num <= 10) {
    $sum += $num;
    $num +=2;
}
echo "sum of even number = ".$sum."<br>";

//foreach loop

$Array = [1,2,3,"AK",'E','$'];
foreach($Array as $arr)
{
    echo $arr." ";
}
?>