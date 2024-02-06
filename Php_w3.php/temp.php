<?php
 $A = [1,3,5,7,9];
 $min = 0; 
 
 for($i = 0; $i < count($A)-1;$i++)
 {
    $min += $A[$i];
 }
 echo $min;