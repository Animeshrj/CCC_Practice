<?php
$sentence = "The quick brown fox jumps over the lazy dog";

// 1. Find the position of the word "fox" in the sentence.
echo strpos($sentence,"fox");
echo("<br>");

// 2. Check if the word "cat" is present in the sentence.
if (str_contains($sentence,"cat"))
{
    echo("true");
}else
{
    echo("false"); 

};
echo("<br>");
echo strpos($sentence,"cat");

// 3. Extract and print the first 20 characters of the sentence.
echo substr($sentence,0,19);
echo("<br>");


?>