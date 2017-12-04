<?php

    /**
     * This is similar in using the function strpos to compare the
     * existence of a string in another...
    */
    $first_string = 'HARRY';
    $second_string = "SALLY";
    $arr = [];
    for($i = 0;$i < strlen($first_string); $i++){
        for($k = 0; $k < strlen($second_string); $k++){
            if($first_string[$i] == $second_string[$k]){
                $arr[] = $first_string[$i];
            }
        }
    }

    /**
     * Using of array_unique filters duplicates strings
     * after comparison has been done,
    */
    $new_array = array_unique($arr);
    echo "The Longest string produced is ". implode($new_array,"");