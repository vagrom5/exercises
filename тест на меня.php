<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="testme.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Насколько ты знаешь Ванечку?</h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
    <fieldset>
        <legend>Два плюс два сколько будет?</legend>
            <label for="2">
                <input type="checkbox" id="two" name="plus[]" value="два">
                2
            </label>
            <label for="4">
                <input type="checkbox" id="four" name="plus[]" value="четыре">
                4
            </label>
            <label for="5">
                <input type="checkbox" id="five" name="plus[]" value="пять">
                5
            </label>
            <label for="А сколько надо?;)">
                <input type="checkbox" id="econanswer" name="plus[]" value="asn">
                А сколько надо?;)
            </label>
    </fieldset>


    <fieldset>
        <legend>Самый лучший город России</legend>
        <label for="Москва">
            <input type="checkbox" id="Moscow" name="city[]" value="moscow">
            Москва
        </label>
        <label for="Санкт-Петербург">
            <input type="checkbox" id="SPB" name="city[]" value="spb">
            Санкт-Петербург
        </label>
        <label for="Украина">
            <input type="checkbox" id="Ukraine" name="city[]" value="Ukraine">
            Украина
        </label>
        <label for="Казань">
            <input type="checkbox" id="Kazan" name="city[]" value="Kazan">
            Казань
        </label>
    </fieldset>


    <fieldset>
        <legend>Величайший музыкант в истории планеты Земля</legend>
        <label for="Дора">
            <input type="checkbox" id="Dora" name="music[]" value="Dora">
            Дора
        </label>
        <label for="Фредди Меркьюри">
            <input type="checkbox" id="Freddy" name="music[]" value="Freddy">
            Фредди Меркьюри
        </label>
        <label for="Аркадий Укупник">
            <input type="checkbox" id="Ukupnik" name="music[]" value="Ukupnik">
            Аркадий Укупник
        </label>
        <label for="Элвис Пресли">
            <input type="checkbox" id="Elvis" name="music[]" value="Elvis">
            Элвис Пресли
        </label>
    </fieldset>


    <fieldset>
        <legend>Лучше нет подарочка, чем...</legend>
        <label for="Деньги">
            <input type="checkbox" id="Money" name="present[]" value="Money">
            Деньги
        </label>
        <label for="Жена татарочка">
            <input type="checkbox" id="wifetat" name="present[]" value="wifetat">
            Жена татарочка
        </label>
        <label for="Акула из икеи">
            <input type="checkbox" id="shark" name="present[]" value="shark">
            Акула из икеи
        </label>
        <label for="Воздушный шар">
            <input type="checkbox" id="balloon" name="present[]" value="balloon">
            Воздушный шар
        </label>
    </fieldset>


    <fieldset>
        <legend>Штирлицу в дверь постучали 10 раз. ....-подумал Штирлиц</legend>
        <label for="осьминог и Мюллер">
            <input type="checkbox" id="octMull" name="Stirlitz[]" value="octMull">
            Осьминог и Мюллер
        </label>
        <label for="Мюллер и 4 гестаповца">
            <input type="checkbox" id="mull4g" name="Stirlitz[]" value="mull4g">
            Мюллер и 4 гестаповца
        </label>
        <label for="1,25 осьминога">
            <input type="checkbox" id="quartoct" name="Stirlitz[]" value="quartoct">
            1,25 осьминога
        </label>
        <label for="Кладовка">
            <input type="checkbox" id="pantry" name="Stirlitz[]" value="pantry">
            Кто стучит из кладовки?
        </label>
    </fieldset>
    <input type="submit" value="Танцуй мартышка">
</form>


<?php
$maxPoints=0;
$totalPoints=0;
$correctAnswers=0;
$totalAnswers=0;

$plus=isset($_POST['plus'])?$_POST['plus']:'';
if(!empty($plus)){
    $maxPoints+=5;
    $totalAnswers++;
    foreach($plus as $answ1){
        if($answ1=="asn"){
            $totalPoints+=5;
            $correctAnswers++;
        }
    }
}

$city=isset($_POST['city'])?$_POST['city']:'';
if(!empty($city)){
    $maxPoints+=10;
    $totalAnswers++;
    foreach($city as $answ2){
        if($answ2=="Ukraine"){
            $correctAnswers++;
            $totalPoints+=10;
        }
    }
}

$music=isset($_POST['music'])?$_POST['music']:'';
if(!empty($music)){
    $maxPoints+=10;
    $totalAnswers++;
    foreach($music as $answ3){
        if($answ3=="Dora"){
            $correctAnswers++;
            $totalPoints+=10;
        }
    }
}

$present=isset($_POST['present'])?$_POST['present']:'';
if(!empty($present)){
    $maxPoints+=15;
    $totalAnswers++;
    foreach($present as $answ4){
        if($answ4=="wifetat"){
            $correctAnswers++;
            $totalPoints+=15;
        }
    }
}

$stirlitz=isset($_POST['Stirlitz'])?$_POST['Stirlitz']:'';
if(!empty($stirlitz)){
    $maxPoints+=20;
    $totalAnswers++;
    foreach($stirlitz as $answ5){
        if($answ5=="quartoct"){
            $correctAnswers++;
            $totalPoints+=20;
        }
    }
}

echo"<br> Правильных ответов:{$correctAnswers} из {$totalAnswers}.</br> Набрано {$totalPoints} из {$maxPoints} "
?>
</body>
</html>