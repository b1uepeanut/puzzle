<?php

    
    $openFile = file_get_contents('data.json');
    $getData = json_decode($openFile,true);

    ksort($getData);
    $length =count($getData);

    // var_dump($getData);
    // krsort($getData);
    // var_dump($getData);

    $i = 0;

    function plus()
    {
        $GLOBALS['i']  += 1;
    }

    foreach($getData as $key=> $value)
    {
        
        echo plus().$i."위\t시간=".$key."  이름=".$value."<br>"; 
    }