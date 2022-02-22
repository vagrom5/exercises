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
$file='namespacgge.php';

try{
    if(!file_exists($file)){
        throw new Exception('File not found');
    }
}catch(Exception $e){
    echo $e->getMessage();
}
?>
</body>
</html>