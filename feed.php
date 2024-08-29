<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: inline; justify-content: center ;">
        <?php

        if(isset($_POST["name"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $cousre = $_POST["cousre"];
            $rating = $_POST["rating"];
            $comments = $_POST["comments"];

            echo "<h1> Thank You for Submitting the Form </h1> ";
            echo $name,"<br>";
            echo $email, "<br>";
            echo $cousre, "<br>";
            echo $rating, "<br>";
            echo $comments, "<br>";
        }

        ?>
    </div>
</body>
</html>
