<?php

$arr1 = array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
);

$arr2 = array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
);

$arr3 = [];

for ($i = 0; $i < count($arr1); $i++) {
    for ($j = 0; $j < count($arr1[$i]); $j++) {
        $arr3[$i][$j] = $arr1[$i][$j] * $arr2[$i][$j];
    }
}

for($i=0; $i<count($arr3); $i++){
    for($j=0; $j<count($arr3[$i]); $j++){
        echo "".$arr3[$i][$j]." ";
    }
    echo "<br>";
}

