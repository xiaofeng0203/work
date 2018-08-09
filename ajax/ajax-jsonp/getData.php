<?php
$t = isset($_GET['t']):$_GET['t']:'num';
$arr1 = array('11111','222222','3333333','44444444444','5555555555555');
$arr2 = array('aaaaa','abbb','cccccccc','ddddddd','eeeeee');
if($t == 'num'){
    $data = json_encode($arr1);
}else{
    $data = json_encode($arr2);
}
echo 'fn('.json_encode($arr1).');';