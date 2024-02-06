<?php
// 1. Basic Arithmetic

// `abs($number)`: Returns the absolute value of a number.
$number = 15.54;
echo (abs($number))."<br>";

// ceil($number)`: Rounds a number up to the nearest integer.
echo(ceil($number))."<br>";

// `floor($number)`: Rounds a number down to the nearest integer.
echo(floor($number))."<br>";

// `round($number, $precision)`: Rounds a number to the nearest integer or specified number of decimal places.
echo(round($number))."<br> <br>";

// 2. Power Functions
// `pow($base, $exponent)`: Returns the value of a base raised to the power of an exponent.
echo"Power Funcation <br>";
echo pow(7,5)."<br>";

// `sqrt($number)`: Returns the square root of a number.
echo sqrt(144)."<br>";

// 3. Random Number Generation
//    rand($min, $max): Generates a random integer between the specified minimum and maximum 
echo rand(1,20)."<br>";

// 4. Number Formatting
//   `number_format($number, $decimals, $decimal_point, $thousands_separator)`: Formats a number with grouped thousands and a specified number of decimals.
echo number_format(1000000000000.898,4,",",".");
?>