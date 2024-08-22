<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Grade results</h1>
<form action="" method="post">
  <div class="form-group">
    Enter Your Marks <input type="text" class="form-control" placeholder="" name="mark">
  </div> 
  <br>
  
  <button type="submit" class="btn btn-primary w-100">submit</button>
    <?php
    $grade = "";
      
        if(isset($_POST['mark']))
        {
            $mark = (int)$_POST['mark'];

            if($mark >= 90 && $mark <=100){
                $grade = "A+";
            }
            elseif ($mark >=80 && $mark <=89){
                $grade = "A";
            }
            elseif ($mark >=70 && $mark <=79){
                $grade = "B";

            }
            elseif ($mark >=60 && $mark <=69){
                $grade = "C";

            }
            elseif ($mark >=50 && $mark <=59){
                $grade = "D";

            }
            elseif ($mark >=40 && $mark <=49){
                $grade = "E";

            }
            elseif ($mark < 30){
                $grade = "F";

            }

            echo "<h3>Mark: $mark</h3>";
            echo "<h3>Grade: $grade</h3>";

        }

    ?>
    
</form>
</body>
</html>
