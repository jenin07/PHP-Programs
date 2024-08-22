<?php

session_start();
if(!isset($_SESSION['user']))
{
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="text-center mt-5">
    <h1>Welcome, 
    <?php
    echo $_SESSION['user'];
    ?>
    </h1>
    <div>
      <?php
      class book{
        public $name;
        public $price;
        public $quantity;

        public function __construct($name, $price, $quantity) {
          $this->name = $name;
          $this->price = $price;
          $this->quantity = $quantity;
        }
      }

      $book1 = new book("Alice in wonderland", 234, 10);
      echo "$book1->name<br>";
      echo "$book1->price<br>";
      echo "$book1->quantity<br>";


      class fruit{
        public $name;
        public $color;

        public function __construct($name, $color){
          $this->name = $name;
          $this->color = $color;
        }

        function display(){
          echo "The fruit is ",$this->name, " and it is ",$this->color;
        }
      }

      $apple = new fruit("Apple", "Red");

      echo $apple->display();

      $var1 = 0;
      $var2 = 4;
      // echo $var1.$var2;

      $a=0;
      while($a++)
      {
        echo "$a";
      }
      echo $a;
       
      ?>
      <br>
    <a href='logout.php'>Logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>