<?php

$rout = isset($_GET['r']) && $_GET['r'] != '' ? $_GET['r'] : die('缺了路由哦~~~');
$routArr = explode('/',$rout);
$module = $routArr[0];
$doc = $routArr[1];

require '../'.$module.'/'.$doc.'.php';
