<?php

    /**
     * Splitting or sorting for upper case in a string(camelCase)
     * for statement by counting the first index
    */
    /*
    $string = "makeMoneyEveryDay";
    $indexes = [];
    $new = [];
    $index = 0;
    for($i = 0;$i < strlen($string);$i++){
        if($string[$i] == strtoupper($string[$i])){
//            echo $i - $index."\n";
            $new[] = substr($string,$index,$i - $index)."\n";
            $indexes[] = $i;
            $index = $i;
        }
    }

    $new[] = substr($string,end($indexes),strlen($string) - 1);
    array_unshift($new, count($new));
    print_r($new);*/


/**
 * Option 2
 * The Splitting or sorting upper case in a statement can also be
 * done using a preg_split function through a pattern
 */

    $string = "makeMoneyEveryDay";
    $new = preg_split('/(?=[A-Z])/', $string);
    array_unshift($new,count($new));
    print_r($new);
