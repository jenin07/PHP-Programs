<?php

class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    // function __construct(){
    //     echo "Employee";
    // }

    function info(){
        echo "<h2>Employee Profile</h2>";
        echo "Employee Name: ".$this->name. " <br>";
        echo "Employee Age: ".$this->age. " <br>";
        echo "Employee Salary: ".$this->salary. " <br>";
    }

}

class manager extends employee{

    // function __construct(){
    //     echo "Manager";
    // }

    public $ta = 1000;
    public $tarif = 500;
    // public $totalsalary;

    function info(){

        echo "<h2>Employee Profile</h2>";
        echo "Employee Name: ".$this->name. " <br>";
        echo "Employee Age: ".$this->age. " <br>";
        echo "Employee Salary: ".$this->salary. " <br>";
        echo "Employee TA: ".$this->ta. " <br>";
        echo "Employee Tarif: ".$this->tarif. " <br>";
        echo "Total Salary: ".$this->salary + $this->ta + $this->tarif . " <br>";

    }

}

    $e1 = new employee("John", 22, 40031);
    $e1->info();

    $m1 = new manager("Jay", 22, 45231);
    $m1->info();


?>