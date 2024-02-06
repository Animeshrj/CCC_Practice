<?php
// <---------TypeCasting----------->
// <---------string---------------->

$FloatToString = (string) $floatVar;
var_dump($FloatToString);
echo("<br>");

$IntToString = (string) $interVar;
var_dump($IntToString);
echo("<br>");

$BoolToString = (string) $boolVar;
var_dump($BoolToString);
echo("<br>");

$ArrayToString = implode(" ",$ArrayVar);
var_dump($ArrayToString);
echo("<br>");

$NullToString = (string) $NullVar;
var_dump($NullToString);
echo("<br>");
echo("<br>");

// <-----Interger------->

$FloatToInt = (int) $floatVar;
var_dump($FloatToInt);
echo("<br>");

$StringToInt = (int) $stringVar;
var_dump($StringToInt);
echo("<br>");

$ArrayToInt = (int) $arrayVar;
var_dump($ArrayToInt);
echo("<br>");

$BoolToInt = (int) $boolVar;
var_dump($BoolToInt);
echo("<br>");

$NullToInt = (int) $NullVar;
var_dump($NullToInt);
echo("<br>");
echo("<br>");

// <-----Float------->

$IntToFloat = (float) $interVar;
var_dump($IntToFloat);
echo("<br>");

$StringToFloat = (float) $stringVar;
var_dump($StringToFloat);
echo("<br>");

$ArrayToFloat = (float) $ArrayVar;
var_dump($ArrayToFloat);
echo("<br>");

$NullToFloat = (float) $NullVar;
var_dump($NullToFloat);
echo("<br>");

$BoolToFloat = (float) $boolVar;
var_dump($BoolToFloat);
echo("<br>");
echo("<br>");

// <--------Array-------->

$IntToArray = (array) $interVar;
var_dump($IntToArray);
echo("<br>");

$FloatToArray = (array) $floatVar;
var_dump($FloatToArray);
echo("<br>");

$StringToArray = explode(" ",$stringVar);
var_dump($StringToArray);
echo("<br>");

$BoolToArray = (array) $boolVar;
var_dump($BoolToArray);
echo("<br>");

$NullToArray = (array) $NullVar;
var_dump($NullToArray);
echo("<br>");
echo("<br>");

//<-------------Null----------->
$IntToNull = (unset) $interVar;
var_dump($IntToNull);
echo("<br>");

$FloatToNull = (unset) $floatVar;
var_dump($FloatToNull);
echo("<br>");

$StringToNull = (unset) $stringVar;
var_dump($StringToNull);
echo("<br>");

$ArrayToNull = (unset) $ArrayVar;
var_dump($ArrayToNull);
echo("<br>");

$BoolToNull = (unset) $boolVar;
var_dump($BoolToNull);
echo("<br>");

?>