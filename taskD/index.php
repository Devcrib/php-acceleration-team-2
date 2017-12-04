<?php


function super_digit($sum_of_string){
    $sum_of_string = (string)$sum_of_string;
    $sum = 0;
    for($i = 0; $i < strlen($sum_of_string); $i++) {
        $sum += $sum_of_string[$i];
        echo $sum."\n";
    }
    if(strlen($sum) > 1) {
        super_digit($sum);
    }//else return $sum;
}

$num = 148;
$k = 3;
$str_to_num = (string)$num;
$sum_of_string = str_repeat($str_to_num, $k);
super_digit($sum_of_string);















