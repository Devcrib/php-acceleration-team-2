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


/*
 * Think before running this code with this long string
 * Uncomment to run the code
 * $num and $k
 */
//$num = 3546630947312051453014172159647935984478824945973141333062252613718025688716704470547449723886626736;
//$k = 100000;
$str_to_num = (string)$num;
$sum_of_string = str_repeat($str_to_num, $k);
super_digit($sum_of_string);














