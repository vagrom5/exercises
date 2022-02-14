<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class user
{
/*    public $name;
    public $password;
    public $mail;
    public $height;


    public function getName()
    {
        echo $this->name;
        $this->test();
    }
    public function test(){
        echo"Test";
    }*/
    public static $name;
    public static function setName($name1){
        self::$name=$name1;
    }
    public static function getName(){
        return self::$name;
    }
}

user::setName('Ivan');
echo user::getName()
/*
$user1=new user();
$user1->name="Darya";
$user1->getName();

$user2=new user();
$user2->name="Vladick";
$user2->getName();

$user3=new user();
$user3->name="Yaroslave";
$user3->getName();*/


?>
</body>
</html>

