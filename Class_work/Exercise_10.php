<!-- Write a PHP function to calculate the factorial of a given number. -->
<?php
$num = 4;
$fact = 1;
for($i = $num;$i >= 1;$i--)
{
    $fact *= $num;
}
echo "The factorial $num is $fact";
?>