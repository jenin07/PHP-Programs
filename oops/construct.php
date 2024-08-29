<?php

class person{
    public $name, $age;

    function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;

    }

    function show(){
        echo $this->name, " ", $this->age;
    }
}

$u1 = new person("Jenin", "22");

$u1->show();