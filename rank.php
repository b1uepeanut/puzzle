<?php
    $openFile = file_get_contents('data.json');
    $getData = json_decode($openFile);
rsort($getData);

foreach($getData as $key=> $value)
{
    echo "시간=".$key." , 이름=".$value."<br>";
}
