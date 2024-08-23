<!-- call by value -->

<?php

function hello($a){
    $a = "Hello world";
}

$a = 'hello';
hello($a);

echo $a;
?>

<!-- call by reference -->

<?php

function hi(&$a){
    $a = "Hello world";
}

$a = 'hello';
hi($a);

echo $a;

?>