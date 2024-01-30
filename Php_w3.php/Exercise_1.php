<?php
// $servername = "localhost";
// $username = "root"; 
// $password = "";


// // <--------create connection--------->
// $conn = mysqli_connect($servername,$username,$password);

// if (!$conn)
// {
//     die("Connection failed :". mysqli_connect_error());
// }
// else{
//     echo "connection stablish";
// }
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Cannot divide by zero";
        }
    }

}
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$Calculator = new Calculator;
echo "Addition <br>";
echo $Calculator -> add($num1, $num2) . "<br>";
echo "subtract <br>";
echo $Calculator -> subtract($num1, $num2) . "<br>";
echo "multiply <br>";
echo $Calculator -> multiply($num1, $num2). "<br>";
echo "divide <br>";
echo $Calculator -> divide($num1, $num2) . "<br>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" value="" name ="num1">Enter the number
            <br>
            <input type="text" value="" name ="num2">Enter the number
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>