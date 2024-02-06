<!-- Write a PHP program that prints the numbers from 1 to 100. For multiples of three, print "Fizz" instead of the number, and for multiples of five, print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz". -->
<?php
for($i = 1; $i<=100; $i++)
{
    if($i % 3 == 0)
    {
        echo"Fizz <br>";
    }
    elseif($i % 5 == 0)
    {
        echo"Buzz <br>";
    }
    elseif($i % 3 == 0 && $i % 5 == 0)
    {
        echo"FizzBuzz";
    }
    else
    {
       echo $i."<br>";
    }
    
}
?>