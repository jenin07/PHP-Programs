<?php
    class User{
        public $name;
        public $age;
        public $email;

        function setdata($name, $age, $email){
            $this->name = $name;
            $this->age = $age;
            $this->email = $email;
        }

        function getdata(){
            return  "Name: ".$this->name."<br>"."Age: ".$this->age."<br>"."Email: ".$this->email;
        }

    }


    $user = new User();

    $user->setdata("Jenin", "23", "jein@gmail.com");
    echo $user->getdata();
