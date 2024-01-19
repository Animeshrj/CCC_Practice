<?php
$txt = "Hello, World! How are you doing?";

//1. Find the length of the string.
echo strlen($txt);
echo("<br>");

//2. Convert the entire string to lowercase.
echo strtolower($txt);
echo("<br>");

//3. Convert the entire string to uppercase.
echo strtoupper($txt);
echo("<br>");

//4. Replace "How are you doing?" with "Fine, thank you!".
echo str_replace("How are you doing?","Fine, thank you!",$txt);
echo("<br>");

//5.Extract and print the first 10 characters of the string.
echo substr($txt,0,9);
echo("<br>");

//6. Extract and print the substring starting from the 8th character to the end.
echo substr($txt,7);
?>