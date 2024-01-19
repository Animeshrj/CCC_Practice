<?php

// 1. Array Creation and Initialization:

// 1. array() or []: Creates a new array.
$color = ["Red","Green","Blue"];
$Habit = array("Good","Bad","Naughty");

// // 2. array_merge($array1, $array2): Merges two or more arrays.
// print_r(array_merge($color,$Habit));
// echo"<br>";

// // 3. array_combine($keys, $values): Creates an array by using one array for keys and another for its values.
// print_r(array_combine($color,$Habit));
// echo"<br>";
// // 4. range($start, $end, $step): Creates an array containing a range of elements.
// print_r(range(0,5));
// echo"<br>";
// //  2. Array Modification:

// // 5. array_push($array, $element) or $array[] = $element:Adds one or more elements to the end of an array.
//  echo (array_push($color,"White"));

//  for($i=1;$i<=5;$i++)
//  {
//     for($j=1;$j<=5 - $i;$j++)
//     {
//         echo $j." ";
       
//     }
   
 
 for($i = 1;$i<=5;$i++)
 
    for($j = 5;$j>=1;$j--)
    {
        if($i >= $j)
        {
            echo $j;
        }
        
    }
    echo "<br>";
 
?>