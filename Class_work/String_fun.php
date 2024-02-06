<?php  
//  echo"Animesh raj <br>";
 //String Funcations
 
$Name = "Animesh raj ";

 //<-- strlen "Finds the position of the first occurrence of a substring in a string."-->

 echo strlen($Name);
 echo("<br>");

 //<-- str_replace "Returns a part of a string starting from the specified position and with a specified length."-->

 echo str_replace("Animesh","Shanu",$Name);
 echo("<br>");

//<-- strpos "Finds the position of the first occurrence of a substring in a string."-->

echo strpos($Name,"e");
echo("<br>");

// <-- substr "Returns a part of a string starting from the specified position and with a specified length."-->

echo substr($Name,0,3);
echo("<br>");

//<-- strtolower "Converts a string to lowercase."-->

echo strtolower($Name);
echo("<br>");

// <-- strtoupper "Converts a string to uppercase."-->

echo strtoupper($Name);
echo("<br>");

//<-- trim "Removes whitespace or other predefined characters from the beginning and end of a string."

$trim = "      Hello     Everyone      ";
$No_space = trim($trim);
echo("$No_space");
echo("<br>");

// <-- explode($delimiter, $string): Splits a string into an array by a specified delimiter.

$Array = explode(" " ,"$");
print_r($Array);
echo("<br>");

// mplode($glue, $pieces): Joins array elements with a string.

$join = implode(" ",$Array);
print_r($join);
echo("<br>");

// htmlspecialchars($string):Converts special characters to HTML entities.

$Url = '<a href= "http://git.beginners.cybercom.in/cccadm/practice/-/branches">Welcome to github</a>';
echo htmlspecialchars($Url);
echo("<br>");


// htmlentities($string):Converts all applicable characters to HTML entities.
echo htmlentities($Url);
echo("<br>");

// str_repeat($string, $multiplier): Repeats a string a specified number of times.

echo str_repeat($Name,3);
echo("<br>");

// strrev($string):Reverses a string

echo strrev($Url);
echo("<br>");

// str_shuffle($string):Randomly shuffles all characters in a string.

echo str_shuffle($trim);
echo("<br>");

// str_split($string, $length):Converts a string to an array, breaking it into smaller chunks.
// in this for print the array we use "print_r" function.

print_r(str_split($trim, 4));
echo("<br>");

// str_word_count($string):Returns the number of words in a string.

echo str_word_count($Url);
echo("<br>");

// substr_replace($string, $replacement, $start, $length): Replaces a portion of a string with another string.

echo substr_replace($trim,"and Good morning",12,22);
echo("<br>");

// str_pad($string, $length, $pad_string, $pad_type): Pads a string tSo a certain length with another string.

echo str_pad($Name, 25, "PHP Developer", STR_PAD_RIGHT);
echo("<br>");

// strcoll($string1, $string2): Locale based string comparison.

echo strcoll($Name,$trim);
echo("<br>");

// strcspn($string, $mask, $start, $length): Finds the length of the initial segment not matching a mask.

echo strcspn($trim, "l", 0, 15);
echo("<br>");

// stristr($haystack, $needle, $before_needle): Case-insensitive search for the first occurrence of a string.
echo stristr($Name, "raj", true);
echo("<br>");    
    
// ucfirst($string): Converts the first character of a string to uppercase.

$first = "let's do it";
echo ucfirst($first);
echo("<br>");  

// ucwords($string): Converts the first character of each word in a string to uppercase.

echo ucwords($first);


?>