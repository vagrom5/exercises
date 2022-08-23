<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
    <link href="calcul.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="modal">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
            <fieldset>
                <input name="fnum" type="text" class="numbers" placeholder="Первое число">
                <select class="operations" name="operations">
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="mult">*</option>
                    <option value="div">/</option>
                </select>
                <input name="snum" type="text" class="numbers" placeholder="Второе число">
                <input class="submit_form" name="equally" type="submit" value="=">
            </fieldset>
        </form>
        <?php
        if(isset($_POST['equally'])){
            $num1=$_POST['fnum'];
            $num2=$_POST['snum'];
            $oper=$_POST['operations'];
        }
        if(!$oper||(!$num1&&$num1!='0')||(!$num2&&$num2!='0')){
            $error="Не все поля заполнены";
        }else{
            if(!is_numeric($num1)||!is_numeric($num2)){
                $error="Введите ЧИСЛА";
            }else{
                switch($oper){
                    case'add': $result=$num1+$num2;
                    break;
                    case'sub': $result=$num1-$num2;
                    break;
                    case'mult': $result=$num1*$num2;
                    break;
                    case'div':if($num2==0){
                        $error= "Недопустимое значение";
                    } else{
                        $result=$num1/$num2;
                        break;
                    }
                }
            }
        }
if(isset($error)){
    echo "Ошибка: $error";
}else{
    echo $result;
}
        ?>
    </div>
</body>
</html>
