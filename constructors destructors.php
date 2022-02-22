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
/*Конструктор
class user{
    public $name;
    public $password;
    public $mail;
    public $height;

    function __construct($name, $password,$mail,$height){
        $this->name=$name;
        $this->password=$password;
        $this->mail=$mail;
        $this->height=$height;
    }

    function getInfo(){
        return"{$this->name} "."{$this->password} "."{$this->mail} "."{$this->height}";
    }
}

$user1=new user("Игорь","Крымнаш","Крымнаш@gmail.com","2014");
//var_dump($user1);
echo $user1->getInfo();*/

class destructclass{
    function __construct(){
        print "Конструктор";
        $this->name="destructclass";
    }

    function __destruct(){
        print "Уничтожение ".$this->name;
    }
}

$obj=new destructclass();
?>
</body>
</html>
