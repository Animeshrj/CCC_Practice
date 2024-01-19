<?php
// 1. Arithmetic Operators
$Num_1 = 54;
$Num_2 = 5;

echo "Addition = ".($Num_1 + $Num_2)."<br>";
echo "Subtraction = ".($Num_1 - $Num_2)."<br>";
echo "Multiplication = ".($Num_1 * $Num_2)."<br>";
echo "Division = ".($Num_1 / $Num_2)."<br>";
echo "Modulus = ".($Num_1 % $Num_2)."<br>";
echo "Exponentiation = ".($Num_1 ** $Num_2)."<br> <br>";

// 2. Assignment Operators:
$Num_1 = $Num_2;
echo"Assignment = ".$Num_1."<br>";
$Num_1 += $Num_2;
echo"Addition Assignment = ".$Num_1."<br>";
$Num_1 -= $Num_2;
echo"Subtraction Assignment = ".$Num_1."<br>";
$Num_1 *= $Num_2;
echo"Multiplication Assignment = ".$Num_1."<br>";
$Num_1 /= $Num_2;
echo"Division Assignment = ".$Num_1."<br>";
$Num_1 %= $Num_2;
echo"Modulus Assignment = ".$Num_1."<br> <br>";

// 3. Comparison Operators:
echo  "(Equal) ".var_dump ($Num_1 == $Num_2)."<br>";
echo "(Identical)".var_dump($Num_1 === $Num_2)."<br>";
echo "(Not Equal)".var_dump($Num_1 != $Num_2)."<br>";
echo "(Not identical)".var_dump($Num_1 !== $Num_2)."<br>";
echo "(Greater Than)".var_dump($Num_1 > $Num_2)."<br>";
echo "(Less Than)".var_dump($Num_1 < $Num_2)."<br>";
echo "(Greater Than or Equal)".var_dump($Num_1 >= $Num_2)."<br>";
echo "(Less Than or Equal)".var_dump($Num_1 <= $Num_2)."<br> <br>";

// 4. Logical Operators:
$bool_1 = true;
$bool_2 = false;

echo "(And)".var_dump($bool_1 && $bool_2)."<br>";
echo "(OR)".var_dump($bool_1 || $bool_2)."<br>";
echo "(NOT)".var_dump(!$bool_1)."<br>";

// 5. Increment and Decrement Operators:
$N_1 = 9;
$N_2 = 6;
if($N_1 < 10)
{
    $N_1++;
    echo $N_1."N_1 <br>";
}
 if($N_2 > 10);
{
    ++$N_2;
    echo $N_2."N_2 <br>";
}

$d1 = $N_1--;
echo $d1."After <br>";
$d2 = --$N_1;
echo $d2."Before <br>";

//6. String Operators:
$Name = "Animesh";
$Surname = "Raj";
echo $Name." ".$Surname."<br>";
echo $Name.=$Surname."<br>";

// 7. Conditional (Ternary) Operator:

$a = 1;
$b = 3;
$c = 4;
echo $a?$b:$c;
?>