<?php
$string = "Animesh raj is a php developer Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste dolorem iure soluta libero rem quibusdam quisquam repellendus est culpa, earum molestias optio similique quas in atque distinctio. Repellat, adipisci mollitia.";
$count = str_word_count($string);

// 1.If Statement:
if($count < 2)
{
    echo "It is a word<br>";
    echo $string;
}

// 2.If else statement

// if($count < 4)
// {
//     echo "It is a Name<br>";
//     echo $string;
// }else
// {
//     echo "It is a sentence <br>";
//     echo $string;
//     echo "<br>";
// }

// 3. If elseif else statement
// if($count <= 4)
// {
//     echo "It is a Name<br>";
//     echo $string;
// }else if($count < 10)
// {
//     echo "It is a sentence <br>";
//     echo $string;
// }else
// {
//     echo "It is a paragraph<br>";
//     echo $string;
// }

// 4.Nested if else statement

// if($count < 10);
// {
//     echo "its is a sentence<br>";
//     if($count > 10)
//     {
//         echo "it is a paragraph";
//     }
//     else
//     {
//         echo "it is a word";
//     }
// }

//Switch case

$day = "Friday";

switch($day)
{
    case"Monday":
        echo "The First day of working week";
        break;
    case"Tuesday":
        echo "The second day of working week";
        break; 
    case"Wednesday":
        echo "The third day of working week";
        break;
    case"Thusday":
        echo "The second last day of working week";
        break; 
    case"Friday":
        echo "The last day of working week";
        break;
    case"Saturday":
        echo "Weekend time guys";
        break;
    case"Sunday":
        echo "let! celebrat today is sunday" ;
        break;
    default:
        echo "It is not a day name";

}
?>