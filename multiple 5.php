<?php
$arr=array(9,4,28,40,15,98,200,14,10,5);
foreach($arr as $key=>$val){
    if($val%5==0){
        echo $key+1;
    }
}
?>