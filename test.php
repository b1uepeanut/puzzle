<?php  

    $json = file_get_contents('./hh.json');
    //var_dump(function_exists(json_decode));
   // die;
    $myarray = json_decode($json, true);
//var_dump($myarray);
