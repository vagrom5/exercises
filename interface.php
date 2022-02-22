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
interface FirstInterface{
    public function getName();
}

interface SecondInterface{
    public function getAge();
}

class Test implements FirstInterface, SecondInterface {
    public $name="Alexey";
    public $age=12;
    public function getName()
    {
        echo $this->name;
    }

    public function getAge()
    {
        echo $this->age;
    }
}

$user1=new Test;
$user1->getName();
$user1->getAge();
?>
</body>
</html>