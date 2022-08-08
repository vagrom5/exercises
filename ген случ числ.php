<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="гсч.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="modal">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
          <p>Минимальное значение:  <input name ="minimal" type="number"></p>
            <p>Максимальное значение:  <input name ="maximal" type="number"></p>
            <input type="submit" value='Сгенерировать'>
        </form>
    <?php
    $min=$_POST['minimal'];
    $max=$_POST['maximal'];
   $num=rand($min,$max);
   if(!empty($min) AND !empty($max)){
    echo $num;
   } else {
       echo "Укажите границы генерируемого числа";
   }
    ?>
    </div>
</body>
</html>