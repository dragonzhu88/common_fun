<?php
/**
 * Created by PhpStorm.
 * User: dragon
 * Date: 2017/4/28
 * Time: 18:44
 */

date_default_timezone_set('PRC');

$y = date("Y");

//获取当天的月份
$m = date("m");

//获取当天的号数
$d = date("d");

//将今天开始的年月日时分秒，转换成unix时间戳(开始示例：2015-10-12 00:00:00)
$todayTime= mktime(0,0,0,$m,$d,$y);

//$todayTime即是当天零点的时间戳
echo $todayTime;

$todayTime= mktime(0,0,0,$m,$d+1,$y);

echo $todayTime;

echo date("Y-m-d H:i:s",$todayTime);