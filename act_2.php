<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> 
        <label><h1>Calculator</h1></label>
        Number 1:<input type="text" name="num1"><br><br>
        Number 2:<input type="text" name="num2"><br><br>
        <input style="margin-left: 100px;" type="submit" value="Calculate">

        <?php


        if(isset($_POST["num1"]) && isset($_POST["num2"])){

            echo $_POST["num1"];
            echo $_POST["num2"];

            // $num1 = $_POST["num1"];
            // $num2 = $_POST["num2"];
            // echo $num1 + $num2;
        }
        ?>

    </form>
    
</body>
</html>