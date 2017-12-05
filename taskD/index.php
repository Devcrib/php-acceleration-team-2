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

//from Paul
function superDigit($n, $k = null) {
    if ($k > 100000) return false;
    $n = (string) $n;
    $p = isset($k)? (digitSum($n) * ($k? $k:1)):$n;
    if (strlen($p) == 1) return $p;
    return superDigit(digitSum($p));
}

function digitSum($n) {
  // in case splitting doesn't cut it
  $sum = 0;
  $n = (string) $n;
  for ($i=0; $i<strlen($n); $i++) $sum += $n[$i];
  return $sum;
}

$result = superDigit($n, $k);
echo $result . "\n";
