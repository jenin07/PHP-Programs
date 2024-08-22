
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login !</title>
  </head>
  <body>
    <h1 class="text-center">Login Page</h1>
    <div class="container mt-5">
    <form action="act_3.php" method="post">
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
</div>


<?php
$user ="";
$pass ="";

if(isset($_POST["user"]) && isset($_POST["password"])){
    $user = $_POST["user"];
    $pass = $_POST["password"];
}
else{
    echo "Invalid Username and Password";
}

if ($user == "admin" && $pass == "admin123")
{
    header('location: act_2.php');
    echo "Welcome Admin";
}
?>

</form>
    </div>
    </body>
</html>