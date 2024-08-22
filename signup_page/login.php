<?php

$login = 0;
$invalid = 0;

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username = $_POST['user'];
    $password = $_POST['password'];

    $sql = "select * from  `register` where user = '$username' and password='$password'";
    $result = mysqli_query($con,$sql);

    if($result)
    {
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $login = 1;
            session_start();
            $_SESSION['user']=$username;
            header('location:home.php');
        }
        else
        {
            $invalid = 1;
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
if($invalid)
{
    echo '<div class="alert alert-danger" role="alert">
    Wrong Credentials !
    </div>';
}
if($login)
{
    echo '<div class="alert alert-success" role="alert">
    Logged in Successfully !
    </div>';
}

?>
    <title>Login !</title>
  </head>
  <body>
    <h1 class="text-center">Login Page</h1>
    <div class="container mt-5">
    <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" placeholder="Enter your username" name="user">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
  <div class="text-center">
  <a href="sign.php">Sign Up</a>
</div>

</form>
    </div>
    </body>
</html>