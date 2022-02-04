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

class Questions{
    public $text;
    public $points;
    public $answers;
    public $correctAnswer;
}


function createQuestion(){
    $question=[];

    $q=new Questions;
    $q->text="Два плюс два сколько будет?";
    $q->points=5;
    $q->answers=array('a'=>'2', 'b'=>'4','c'=>'8','d'=>'А сколько надо? ;)');
    $q->correctAnswer='d';
    $question[]=$q;

    $q=new Questions;
    $q->text="Самый лучший город России";
    $q->points=10;
    $q->answers=array('a'=>'Москва','b'=>'Санкт-Петербург','c'=>'Украина','d'=>'Краснодар');
    $q->correctAnswer='c';
    $question[]=$q;

    $q=new Questions;
    $q->text="Величайший музыкант в истории планеты Земля";
    $q->points=15;
    $q->answers=array('a'=>'Элвис Пресли','b'=>'Дора','c'=>'Фредди Меркьюри','d'=>'Аркадий Укупник');
    $q->correctAnswer='b';
    $question[]=$q;

    return $question;
};


function printQuestions($question){
    $num=1;
    foreach($question as $quest){
        echo"</br><strong>{$num}."."{$quest->text}</strong></br>";
        echo"Варианты ответов:</br>";
        foreach($quest->answers as $letter => $answ){
            echo"{$letter}."."{$answ}</br>";
        }
        $num++;
    }
}


function checkAnswers($question, $answers){
    $totalPoints=0;
    $maxPoints=0;
    $correctAnswers=0;
    $totalquestion=count($question);

    if(count($answers)!=count($question)){
        die("Заполни все поля лол не уважаешь меня что ли");
    }

    for($i=0;$i<count($question);$i++){
        $que=$question[$i];
        $ans=$answers[$i];
        $maxPoints+=$que->points;
        if($ans==$que->correctAnswer){
            $correctAnswers++;
            $totalPoints+=$que->points;
        }else{
            $num=1+$i;
            echo"</br>Ошибочка вышла в вопросе №{$num} ({$que->text})</br>";
        }
    }
    echo"</br>Правильных ответов: {$correctAnswers} из {$totalquestion}</br> Набрано баллов:{$totalPoints} из {$maxPoints}";
}
$answers=array('b','c','b');
$question=createQuestion();
printQuestions($question);
checkAnswers($question,$answers);
?>

</body>
</html>