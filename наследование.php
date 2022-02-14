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
        $information="{$this->name} "."{$this->password} "."{$this->mail} "."{$this->height}";
        return $information;
    }
}

//$user1=new user("Игорь","Крымнаш","Крымнаш@gmail.com","2014");
//echo $user1->getInfo();

class moder extends user{
    public $info;
    public $rights;

    function __construct($name, $password, $mail, $height, $info, $rights)
    {
        parent::__construct($name, $password, $mail, $height);
        $this->info=$info;
        $this->rights=$rights;
    }

    function getInfo(){
        $information=parent::getinfo();
        $information.="{$this->info} "."{$this->rights} ";
        return $information;
    }
}
$moderator=new moder("Игорь","Крымнаш","Крымнаш@gmail.com","2014","Moderator","True");
echo $moderator->getInfo();*/

class test{
    protected $info;
}

class test2 extends test{
    public function test(){
        $this->info="info";
        echo $this->info;
    }
}
$test2=new test2();
$test2->test();
?>
</body>
</html>

