<?php
header('Content-type:text/html; charset="utf-8"');
/*
API: getpic.php
参数cpage:获取数据的页数
*/
$cpage = isset($_GET['cpage'])?$_GET['cpage']:1;
$url = 'http://www.wookmark.com/api/json/popular?page='.$cpage;
$content = file_get_contents($url);

echo $content;