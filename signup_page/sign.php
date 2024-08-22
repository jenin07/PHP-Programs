<?php

$success = 0;
$user = 0;

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username = $_POST['user'];
    $password = $_POST['password'];

    $sql = "select * from  `register` where user = '$username'";
    $result = mysqli_query($con,$sql);

    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $user = 1;
        }
        else
        {
            $sql="insert into  `register`(user, password) values('$username',$password)";
            $result = mysqli_query($con,$sql);
            if($result)
            {
                $success = 1;
                
            }
            else
            {
                die(mysqli_error($con));
            }

        }
        
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
if($user)
{
    echo '<div class="alert alert-danger" role="alert">
    User Already Exists !
    </div>';
}
if($success)
{
    echo '<div class="alert alert-success" role="alert">
    User Signed Up Successfully !
    </div>';
    session_start();
    $_SESSION['user']=$username;
    header('location:home.php');
}

?>
    <title>Sign Up!</title>
    <style>
      section{
        border: 1px solid;
        border-radius: 5px;
        padding: 5px;
      }
      fieldset{
        border: 1px solid;
        border-radius: 5px;
        padding: 15px;
      }
    </style>
  </head>
  <body>
    <h1 class="text-center">Innovate 2024</h1>
    <div class="container mt-5" >
    <form action="sign.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" placeholder="Enter your username" name="user">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="text" class="form-control" placeholder="Enter your Mail Address" name="user">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" class="form-control" placeholder="Enter your Phone Number" name="user">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Gender</label><br>
    <section style>
    <input type="radio" id="gender" placeholder="Sele your username" name="user">Male <br>
    <input type="radio" id="gender" placeholder="Sele your username" name="user">Female <br>
    <input type="radio" id="gender" placeholder="Sele your username" name="user">Perfer Not to Say
  </section>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" class="form-control" placeholder="Enter your Age" name="user">
  </div>
  <div class="form-group" sty>
    <label for="exampleInputEmail1">Address</label>
    <fieldset>
    Street<input type="text" class="form-control" placeholder="Enter your Street " name="user">
    City<input type="text" class="form-control" placeholder="Enter your City " name="user">
    State<input type="text" class="form-control" placeholder="Enter your State" name="user">
    Zip Code<input type="text" class="form-control" placeholder="Enter your ZIP Code" name="user">
    </fieldset>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Event Session</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dietary Preferences</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Addtional Comments</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Sign Up</button>
  <br>
  <div class="text-center">
  <a href="login.php">Login</a>
</div>
</form>
    </div>
    </body>
</html>