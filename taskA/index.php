<?php
    $string = "aaabccddd";
    $newstring = "";
    for($i = 0;$i <= strlen($string) - 1;$i++){
        if($string[$i + 1] !== false){
            if($string[$i] == $string[$i + 1]){
                $string[$i] = $string[$i + 1] = "";
            }else{
                $newstring .= $string[$i];
            }

        }
    }
    if(strlen($newstring) == 0){
        echo $string." -> Empty String";
    }
    echo $newstring;


?>