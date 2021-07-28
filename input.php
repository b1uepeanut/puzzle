<?php
$time = $_POST['time'];
$name = $_POST['name'];

var_dump($time);
var_dump($name);

if(file_exists('data.json')){
    $json = file_get_contents('data.json');
    $data = json_decode($json,true);
    if(empty($data))
    {
        echo "안녕";
        $data = array();
        file_put_contents('data.json',json_encode($data,JSON_UNESCAPED_UNICODE));
        $json = file_get_contents('data.json');
        $data = json_decode($json,true);
        $data1 = array($time => $name);
        $data2 = array_merge($data,$data1);
        echo "dks";
        file_put_contents('data.json',json_encode($data2,JSON_UNESCAPED_UNICODE));
    } else {
        $data1 = array($time => $name);
        $data2 = array_merge($data,$data1);
        var_dump($data2);
        file_put_contents('data.json',json_encode($data2,JSON_UNESCAPED_UNICODE));
    }

}

// if(file_exists($json)){
// $json = file_get_contents('data.json');
//     $data = json_decode($json);
//     $data = array($time => $name);
//     array_push($json,$data);
//    file_put_contents('data.json', json_encode($data));

// } else {
//     $json = file_get_contents('data.json');
//     $data = json_decode($json);
//     $data = array($time => $name);
//    file_put_contents('data.json', json_encode($data,));

// }
?>

