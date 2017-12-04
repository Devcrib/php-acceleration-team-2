<?php
function getSum($num){
//    echo $num."\n";
    $len = strlen($num);
//    echo $len."\n";
    $new_num = 0;
    for ($i = 0; $i < $len; $i++ ) {
        echo $i."\n";
        $new_num = $new_num +$num[$i];
    }
    return $new_num;
}
$n = 148;
$k = 3;
$p = 0;
$new = str_repeat($n, $k);
$len = strlen($new);
//echo $len;
$p = getSum($new);
$new_p = getSum($p);
//while($p){
//    if(strlen($p) == 1){
//        break;
//    }
//    $p = getSum($p);
//    echo $p;
//}
