
<?php
$time = $_POST['time'];
$name = $_POST['name'];
$arr = array($time => $name);

if(file_exists('data.json')){
    $json = file_get_contents('data.json');
    $getData= json_decode($json,true);
    if(empty($getData))
    {
        echo "안녕";
        $getData= array();
        $totalData = array_merge($getData,$arr);
        file_put_contents('data.json',json_encode($totalData,JSON_UNESCAPED_UNICODE));
    } else {
        $totalData = array_merge($getData,$arr);
        file_put_contents('data.json',json_encode($totalData,JSON_UNESCAPED_UNICODE));
    }

}

?>

<?php 
        echo "<script type='text/javascript'> 
        location.replace('rank.php') 
            </script>"; 
?> 

