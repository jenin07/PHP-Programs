<?php
$array = [1, 2, 3, 4, 5];
echo "Original array: <br>";
for ($i=0; $i<count($array); $i++){
    echo $array[$i];
}
echo "<br>";

$position = 3;
$newElement = '$';

array_splice($array, $position, 0, $newElement);

echo "After inserting '$' the array is: <br>";

for ($i=0; $i<count($array); $i++){
    echo $array[$i];
}