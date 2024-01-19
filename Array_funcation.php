<?php

// 1. Array Creation and Initialization:

// 1. array() or []: Creates a new array.
$color = ["R" =>"Red","G"=>"Green","B"=>"Blue"];
$Habit = array("G"=>"Good","B"=>"Bad","N"=>"Naughty");

// 2. array_merge($array1, $array2): Merges two or more arrays.
print_r(array_merge($color,$Habit));
echo"<br>";

// 3. array_combine($keys, $values): Creates an array by using one array for keys and another for its values.
print_r(array_combine($color,$Habit));
echo"<br>";
// 4. range($start, $end, $step): Creates an array containing a range of elements.
print_r(range(0,5));
echo"<br>";
//  2. Array Modification:

// 5. array_push($array, $element) or $array[] = $element:Adds one or more elements to the end of an array.
 array_push($color,"White");
 print_r($color);
 echo"<br>";
//  6. array_pop($array): Removes the last element from an array.
array_pop($color);
print_r($color);
echo"<br>";  
// 7. array_unshift($array, $element):Adds one or more elements to the beginning of an array.
array_unshift($Habit,"runing");
print_r($Habit);
echo"<br>"; 
// 8. array_shift($array): Removes the first element from an array.
array_shift($Habit);
print_r($Habit);
echo"<br>"; 
// 9. array_splice($array, $start, $length, $replacement): Removes a portion of the array and replaces it with something else.
array_splice($color,0,2,$Habit );
print_r($color); 
echo"<br>"; 
// 3. Array Access:

// 10. count($array):Counts the number of elements in an array.
echo(count($Habit));
echo"<br>"; 

// 11. sizeof($array): Alias of count().
echo(sizeof($color));
echo"<br>";

// 12. array_key_exists($key, $array): Checks if the given key or index exists in the array.
if(array_key_exists("G",$Habit))
{
    echo"color present";
}
else{
    echo"color not prsent";
}
echo"<br>";
// 13. array_keys($array):- Returns all the keys or a subset of the keys of an array.
print_r(array_keys($color));
echo"<br>";
print_r(array_keys($Habit));
echo"<br>";

// 14. array_values($array):- Returns all the values of an array.
print_r(array_values($color));
print_r(array_values($Habit));
?>