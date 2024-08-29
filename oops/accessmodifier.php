<?php

class a{
    public $name;
    
    function __construct($n){
        $this->name = $n;
    }

    
}

class b extends a{
    public $age = 25;

    function __construct($n, $a){
        parent::__construct($n);
        $this->age = $a;
    }

    function show(){
        echo "Name: ".$this->name." <br>";
        echo "Age: ".$this->age;
    }
}

$obj = new b("Joel", 25);
$obj->show();

?>