<?php

class Student
{
    public $name;
    public $age;
    public $grade;

    public function displayInfo() {
        echo "Name: $this->name, Age: $this->age, Grade: $this->grade";
    }

}

$student = new Student();
$student->name = $_POST['name'];
$student->age = $_POST['age'];
$student->grade = $_POST['grade'];

$student->displayInfo();
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
            <input type="text" value="" name ="name">Name
            <br>
            <input type="text" value="" name ="age">Age
            <br>
            <input type="text" value="" name ="grade">Grade
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>