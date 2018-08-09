<?php
header('content-type:text/html; charset="utf-8"');
error_reporting(0);

$arr1 = array('momo', 'xiaofeng', 'tan');

//$arr2 = array('username'=>'feng', 'age'=>28);

echo json_encode($arr1);
    