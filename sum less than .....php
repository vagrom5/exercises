<?php
$arr=array();
function my_func($lim)
{
    for ($i = 0; $i < $lim; $i++) {
        $arr[$i] = rand(0, 10);
    };
    return $arr;
};
do {
    $array = my_func(5);
    $summary=array_sum($array);
}while($summary<=20);
foreach($array as $num){
    echo"$num<br/>";
}
echo"Сумма $summary";
?>