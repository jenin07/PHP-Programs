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

<!-- example -->

<?php

function incre($i){
    $i++;
    return $i;
}

$i = 1;
echo incre($i); //it will print 2
echo $i; //it will print 1

?>

<!-- Reference -->

<?php

function inc(&$i){
    $i++;
    return $i;
}

$i = 1;
echo inc($i); //it will print 2
echo $i; //it will print 1

?>