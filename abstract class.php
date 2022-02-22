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
abstract class user{
    public $name;
    public $age;

   abstract public function getAge();


}

class admin extends user{
    public function getAge()
    {
        echo "admin";
    }
}

$user1=new admin();
$user1->getAge();
?>
</body>
</html>