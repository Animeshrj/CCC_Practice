<!-- Write a PHP function to generate the Fibonacci sequence up to a specified number of terms. -->
<?php
$num = 7;

function fiboo($num)
{
    if($num == 0)
    {
        return 0;
    }
    else if($num == 1)
    {
        return 1;
    }
    else
    {
        return (fiboo($num - 1) + fiboo($num - 2));
    }
}

for($count = 0;$count < $num;$count++)
{
    echo fiboo($count);
}
?>