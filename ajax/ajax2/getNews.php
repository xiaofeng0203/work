<?php
header('content-type:text/html; charset="utf-8"');
error_reporting(0);

$news = array(
    array('title'=>'习近平引领科技强军路', 'data'=>'2013-1-6'),
    array('title'=>'百白破你真的了解吗？ 关于免疫和疫苗', 'data'=>'2013-2-4'),
    array('title'=>'经济日报连发五文，深度解读当前经济形势', 'data'=>'2013-3-2'),
    array('title'=>'生态环境部发现京津冀及周边地区涉气环境问题45个', 'data'=>'2013-2-6'),
    array('title'=>'韩艺人放弃明星梦改卖泡菜：出口中国 年赚6000万', 'data'=>'2013-2-6'),
    array('title'=>'小米音乐和网易云音乐达成转授权合作 你会卸载谁？', 'data'=>'2013-2-6'),
    array('title'=>'他靠"猫"为众多企业节能节费 24岁就登上了福布斯', 'data'=>'2013-3-6'),
    array('title'=>'建“明星”干警沦为阶下囚：把权力当商品', 'data'=>'2013-2-7'),
    array('title'=>'福州大学学子走进上杭开展社会实践', 'data'=>'2013-2-6'),
);

echo json_encode($news);