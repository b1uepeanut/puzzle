<?php
$m1 = file_get_contents('hh.json');
$m2 = json_decode($m1);

foreach($m2 as $value)
{
    echo $value.PHP_EOL;
}
?>