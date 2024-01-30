<?php
class Point {
    public $x;
    public $y;

    public function calculateDistance(Point $other) {
        return sqrt(pow($this->x - $other->x, 2) + pow($this->y - $other->y, 2));
    }
}
$p1 = new Point();
$p1->x = $_POST['num1'];
$p1->y = $_POST['num2'];

$p2 = new Point();
$p2->x = $_POST['number1'];
$p2->y = $_POST['number2'];

echo $p1->calculateDistance($p2);
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
            <input type="text" value="" name ="number1">Enter the number
            <br>
            <input type="text" value="" name ="number2">Enter the number
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>