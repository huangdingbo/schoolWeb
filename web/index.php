<?php

$rout = isset($_GET['r']) && $_GET['r'] != '' ? $_GET['r'] : die('缺了路由哟~~~');
$routArr = explode('/',$rout);
$module = $routArr[0];
$doc = $routArr[1];
$file = '../'.$module.'/'.$doc.'.php';
if(file_exists($file)){
    require '../'.$module.'/'.$doc.'.php';
}else{
    die('文件夹或者文件不存在哟~~~'.$file);
}

