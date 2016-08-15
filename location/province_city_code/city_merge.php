<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-8-15
 * Time: 下午5:24
 * 此文件的功能时合并两个数组
 * 一个数组为城市省份数组，另一个数组为包含省代码省名称的和省人数的数组
 * 最后合并的数组是没有数据的省份人数为零，有的将数组2中对应的人数写到新数组中，形成新的数组
 */

require_once 'index.php';

$resultList = [];

$list = json_decode(WmRecordScanRegionCodeConvert::REGION_AERA,true);

$listarray = [
  [ 'province_name' => '澳门特别行政区',
    'province_code' => 820000,
    'total' => 111,
  ],
  [ 'province_name' => '香港特别行政区',
    'province_code' => 810000,
    'total' => 222,
  ],
  [ 'province_name' => '台湾省',
    'province_code' => 710000,
    'total' => 333,
  ],

];

$flag = FALSE;

foreach ($list as $value) {
  foreach ($listarray as $value_province) {
    if ($value['areaId'] == $value_province['province_code']) {
      $resultList[] = array(
        'province_name' => $value_province['province_name'],
        'province_code' => $value_province['province_code'],
        'total' => $value_province['total']
      );
      $flag = TRUE;
      break;
    }
  }
  if ($flag) {

  }
  else {
    $resultList[] = array(
      'province_name' => $value['areaId'],
      'province_code' => $value['areaName'],
      'total' => 0
    );
  }
  $flag = FALSE;
}

var_dump($resultList);