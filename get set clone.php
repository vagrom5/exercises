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
/*
class user{

    private $name;
    private $age;
    private $id;

    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function __clone(){
        $this->id=0;
    }
}

$user1=new user("Kirill","15");
$user1->setId(1408);
$user2=clone $user1;
var_dump($user2);
*/
class getset{
    private $number=1;

    public function __get($name){
        echo "You get {$name}";
    }
    public function __set($name,$val){
        echo "You set {$name} to {$val}";
    }
}

$obj=new getset();
$obj->number;
$obj->number=666;
?>
</body>
</html>