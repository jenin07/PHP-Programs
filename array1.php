<?php

$arr1 = array(
            array(1,2,3),
            array(4,5,6),
            array(7,8,9)
);

for ($i = 0; $i < count($arr1); $i++) {
    for ($j = 0; $j < count($arr1[$i]); $j++) {
        echo $arr1[$i][$j]." ";
    }
    echo "<br>";
}

