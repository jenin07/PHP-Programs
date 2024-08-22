
<?php

if(isset($_POST)){


    echo "<h1>".$_POST["author"]."</h1>";
    echo "<h1>".$_POST["name"]."</h1>";
    echo "<h1>".$_POST["quantity"]."</h1>";
    echo "<h1>".$_POST["price"]."</h1>";

    $quan = $_POST["quantity"];
    $price = $_POST["price"];
    $total = $price * $quan;

echo "<h1>The total amount is: ",$total,"</h1>";

}

?>