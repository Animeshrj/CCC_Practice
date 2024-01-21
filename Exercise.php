<!-- Please write a program for the this. The input will be a higher percentage (e.g. $higherPercent = 10 ), and the output will be the corresponding lower percentage (e.g. 50). And Push changes on git. -->
<?php


function calculateLowerPercentage($higherPercent) {
    
    if ($higherPercent < 0 || $higherPercent > 100) {
        return "Invalid input. Please enter a percentage between 0 and 100.";
    }

    
    $lowerPercent = 100 - $higherPercent;

    return $lowerPercent;
}


$higherPercent = 50;
$lowerPercent = calculateLowerPercentage($higherPercent);

echo "For a higher percentage of $higherPercent%, the corresponding lower percentage is $lowerPercent%.";

?>

