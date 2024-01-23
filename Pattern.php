<?php


function pattern($num)
{
    for($i = 1;$i<=$num;$i++)
    {
        for($k = 1;$k < $i;$k++)
        {
            echo " ";
        }
        for($j = $i;$j<=$num;$j++)
        {
          echo $j." ";
        }
        $num--;
        echo "\n";
    }
    for($i = $num;$i>= 1;$i--)
    {
        for($k = 1;$k < $i;$k++)
        {
            echo " ";
        }
        for($j = $i;$j<=$num;$j++)
        {
            echo $j." ";
        }
        $num++;
        echo "\n";
    }
}

$num = 10;
pattern($num);
?>