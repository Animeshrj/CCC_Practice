<!-- Implement the Bubble Sort algorithm to sort an array. (Do not use array sort function) -->
<?php
$arrayToSort = [64, 34, 25, 12, 22, 11, 90];
function BubbleSort($arrayToSort)
{
    $len = count($arrayToSort);
   for($i = 0;$i < $len;$i++)
    {
        for($j = 0;$j < $len - $i -1;$j++)
        {
            if($arrayToSort[$j] > $arrayToSort[$j + 1])
            {
                $temp = $arrayToSort[$j];
                $arrayToSort[$j] = $arrayToSort[$j + 1];
                $arrayToSort[$j + 1] = $temp;
            }
             
        }
    }
    return $arrayToSort;
}

$sorted_Array = BubbleSort($arrayToSort);

print_r($sorted_Array);
?>
