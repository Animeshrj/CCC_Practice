<!-- Write a PHP function to determine whether a given number is prime. -->
<?php
function primeNumber($num)
{
    if($num == 1)
    {
        return 0;
    }
    for($i = 2;$i <= $num/2;$i++)
    {
        if($num % $i == 0)
        {
            return 0;
        }
       return 1;
    }
}

$num = 44;
$prime = primeNumber($num);
if($prime == 1)
{
    echo "Prime";
}
else
{
    echo "Not Prime";
}
?>