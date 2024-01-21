<?php

// 1. Array Creation and Initialization:

// 1. array() or []: Creates a new array.
$color = ["R" =>"Red","G"=>"Green","B"=>"Blue"];
$Habit = array("G"=>"Good","B"=>"Bad","N"=>"Naughty");

// 2. array_merge($array1, $array2): Merges two or more arrays.
echo"<h2>This is array_merge funcation</h2> <br>";
print_r(array_merge($color,$Habit));
echo"<br>";

// 3. array_combine($keys, $values): Creates an array by using one array for keys and another for its values.
echo"<h2>This is array_combine funcation</h2> <br>";
print_r(array_combine($color,$Habit));
echo"<br>";
// 4. range($start, $end, $step): Creates an array containing a range of elements.
echo"<h2>This is range funcation</h2> <br>";
print_r(range(0,5));
echo"<br>";
//  2. Array Modification:

// 5. array_push($array, $element) or $array[] = $element:Adds one or more elements to the end of an array.
 echo"<h2>This is array_push funcation</h2> <br>";
 array_push($color,"White");
 print_r($color);
 echo"<br>";
//  6. array_pop($array): Removes the last element from an array.
echo"<h2>This is array_pop funcation</h2> <br>";
array_pop($color);
print_r($color);
echo"<br>";  
// 7. array_unshift($array, $element):Adds one or more elements to the beginning of an array.
echo"<h2>This is array_unshift funcation</h2> <br>";
array_unshift($Habit,"runing");
print_r($Habit);
echo"<br>"; 
// 8. array_shift($array): Removes the first element from an array.
echo"<h2>This is array_shift funcation</h2> <br>";
array_shift($Habit);
print_r($Habit);
echo"<br>"; 
// 9. array_splice($array, $start, $length, $replacement): Removes a portion of the array and replaces it with something else.
echo"<h2>This is array_splice funcation</h2> <br>";
array_splice($color,0,2,$Habit );
print_r($color); 
echo"<br>"; 
// 3. Array Access:

// 10. count($array):Counts the number of elements in an array.
echo"<h2>This is count funcation</h2> <br>";
echo(count($Habit));
echo"<br>"; 

// 11. sizeof($array): Alias of count().
echo"<h2>This is sizeof funcation</h2> <br>";
echo(sizeof($color));
echo"<br>";

// 12. array_key_exists($key, $array): Checks if the given key or index exists in the array.
echo"This is arr<h2>ay_key_exists funcation</h2> <br>";
if(array_key_exists("G",$Habit))
{
    echo"color present";
}
else{
    echo"color not prsent";
}
echo"<br>";
// 13. array_keys($array):- Returns all the keys or a subset of the keys of an array.
echo"<h2>This is array_keys funcation</h2> <br>";
print_r(array_keys($color));
echo"<br>";
print_r(array_keys($Habit));
echo"<br>";

// 14. array_values($array):- Returns all the values of an array.
echo"This is<h2> array_values funcation</h2> <br>";
print_r(array_values($color));
echo"<br>";
print_r(array_values($Habit));
echo"<br>";

// 4. Array Search:
// 15. in_array($needle, $haystack):- Checks if a value exists in an array.
echo"<h2>This is in_array funcation</h2> <br>";
if(in_array("Good",$color))
{
    echo("Color is present");
    echo"<br>";
}
else
{
    echo("Color is  not present");
    echo"<br>";
}

// 16. array_search($needle, $haystack): - Searches an array for a given value and returns the corresponding key.
echo"<h2>This is array_search funcation</h2> <br>";
echo array_search("Blue",$color);
echo"<br>";

// 17. array_reverse($array):- Returns an array with elements in reverse order.
echo"<h2>This is array_reverse funcation</h2> <br>";
print_r(array_reverse($Habit));
echo"<br>";

// 5. Array Sorting:
$Arr = array(6,2,23,3,5);

// 18. sort($array):- Sorts an array.
echo"<h2>This is sort funcation</h2> <br>";
sort($Arr);
foreach ($Arr as $key => $val) {
    echo "numbers[" . $key . "] = " . $val . "<br>";
}
echo"<br>";
// 19. rsort($array):- Sorts an array in reverse order.
echo"<h2>This is rsort funcation</h2> <br>";
rsort($Arr);
foreach ($Arr as $value => $v) {
    echo "numbers[" . $value . "] = " . $v . "<br>";
}
echo"<br>";
// 20. asort($array):- Sorts an associative array by values.
echo"<h2>This is asort funcation</h2> <br>";
$assoc = array( 1 => "Product", 2 => "feature",3 => "Activity");
asort($assoc);
foreach ($assoc as $value => $v) {
    echo "numbers[" . $value . "] = " . $v . "<br>";
}
echo"<br>";
// 21. ksort($array):- Sorts an associative array by keys.
echo"<h2>This is ksort funcation</h2> <br>";
ksort($assoc);
foreach ($assoc as $value => $v) {
    echo "numbers[" . $value . "] = " . $v . "<br>";
}
echo"<br>";
// 22. arsort($array):- Sorts an associative array in reverse order by values.
echo"T<h2>his is arsort funcation</h2> <br>";
$Assoc = array( "Product" => 1, "Feature" => 2,"Activity" => 3);
arsort($Assoc);
foreach ($Assoc as $value => $v) {
    echo "numbers[" . $value . "] = " . $v . "<br>";
}
echo"<br>";
// 23. krsort($array):- Sorts an associative array in reverse order by keys.
echo"<h2>This is ksort funcation</h2> <br>";
krsort($Assoc);
foreach ($Assoc as $value => $v) {
    echo "numbers[" . $value . "] = " . $v . "<br>";
}
echo"<br>";
// 6. Array Filtering:
// 24. array_filter($array, $callback):- Filters elements of an array using a callback function.

// 7. Array Slicing:
// 27. array_slice($array, $offset, $length, $preserve_keys):- Extracts a portion of the array.
echo"<h2>This is array_slice funcation</h2> <br>";
print_r(array_slice($assoc,2,1,true));
echo"<br>";
print_r(array_slice($assoc,2,1,false));
echo"<br>";

// 28. array_splice($array, $offset, $length, $replacement):- Removes a portion of the array and replaces it with something else.
echo"<h2>This is array_splice funcation</h2> <br>";
array_splice($assoc,1,0,$Assoc);
print_r($assoc);

?>