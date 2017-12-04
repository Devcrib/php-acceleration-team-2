<?php

/**
 * Comparison of two
*/
    $string = "aaabccddd";
    $newstring = "";
    for($i = 0;$i <= strlen($string) - 1;$i++){
        if($string[$i + 1] !== false){  //If each character's value is true
            if($string[$i] == $string[$i + 1]){ //If the last character is equal to the next string
                $string[$i] = $string[$i + 1] = "";
            }else{
                $newstring .= $string[$i]; //So far the current character isn't equal to next character, set the new character
            }

        }
    }
    if(strlen($newstring) == 0){
        echo $string." -> Empty String";
    }
    echo $newstring;


?>