<?php
function getSum($str_to_num){
    $str_to_num = (string)$str_to_num;
    $sum = 0;

    if(strlen($str_to_num) > 1) {  
        for($i = 0; $i < strlen($str_to_num); $i++){
            $sum += $str_to_num[$i];
        }
            if(strlen((string)$sum) > 1 || strlen((string)$sum) == 1) getSum($sum);
    } else echo 'single num '.$str_to_num;    
}

function super_digit($num, $k) {
    $repeated_string = str_repeat((string)$num, $k);
    getSum($repeated_string);
}

$num = 993;
$k_times = 1;
super_digit($num, $k_times);