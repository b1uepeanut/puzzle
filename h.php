<?php

    function isJson($string) {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }

    

    $m1 = file_get_contents('hh.djson');
    if(isJson($m1)){
        $m2 = json_decode($m1);
        foreach($m2 as $value)
        {
            echo $value.PHP_EOL;
        }
    } else {
            echo 'banana
            apple';
    }
    
    


?>