<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CA1</title>
</head>
<body>

    <form method="post">
        <label>Enter a No from 1 to 7: </label>
        <input type="number" name="day"><br>
        <br>

        <input style="margin-left: 150px;" type="submit">
    </form>

    <?php

    if(isset ($_POST["day"])){
        $day = $_POST["day"];

        if ($day > 8){
            echo "Invalid Number";
        }
        else{
            switch ($day) {

                case '1':
                    echo "Monday";
                    break;
                case '2':
                    echo "Tuesday";
                    break;
                case '3':
                    echo "Wednesday";
                    break;
                case '4':
                    echo "Thursday";
                    break;
                case '5':
                    echo "Friday";
                    break;
                case '6':
                    echo "Saturday";
                    break;
                case '7':
                    echo "Sunday";
                    break;
                default:
                    echo "Invalid";
                    break;
            }
        }
    }

    ?>

</body>
</html>