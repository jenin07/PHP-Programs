<?php

class car{
    public $model, $year, $make;

    function __construct($mo, $y, $ma) {
        $this->model = $mo;
        $this->year = $y;
        $this->make = $ma;
    }

    function startcar(){
        echo "The ". $this->model." has started. <br>";
    }

    function stopcar(){
        echo "The ". $this->model." has stopped. <br>";
    }
}

$suzuki = new car("Swift", 2012, "Silver body" );
$honda = new car("City", 2016, "Grey body" );

echo $suzuki->startcar();
$honda->stopcar();

?>