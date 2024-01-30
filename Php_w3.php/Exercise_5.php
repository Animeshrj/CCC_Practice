<?php
   class Employee {
    public $name;
    public $position;
    public $salary;
    private $display;
    public function calculateYearlyBonus() 
    {
        // $display->displayInfo();
        return $this->salary * 0.1; 
    }
    public function displayInfo() {
        echo "Name: $this->name, Position: $this->position Salary: $this->salary";
    }

}

$employee = new Employee();
$employee->name = $_POST['name'];
$employee->position = $_POST['pos'];
$employee->salary = $_POST['sal'];

echo $employee->calculateYearlyBonus();
$employee->displayInfo();

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
            <input type="text" value="" name ="pos">Position
            <br>
            <input type="text" value="" name ="sal">Salary
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>