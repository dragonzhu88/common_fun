<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-11-7
 * Time: 下午5:31
 */


//@todo 根据关键字搜索数组中相匹配的值，并形成新的数组返回
function array_search_by_keyword($array,$keyword){
  $result = [];
  foreach ($array as $k => $v) {
    if (strstr($v['name'], $keyword, FALSE)) {
      $result[] = $v;
    }
  }
  return $result;
}

//@todo 根据关键字搜索数组中相匹配的键，并形成新的数组返回
function array_search_by_key($array,$keyword){

//  var_dump($array);

  $result = [];
  foreach($array as $k => $v){

    if(strstr((string)$k, (string)$keyword, FALSE)){
      $result[] = $v;
    }
  }
  return $result;
}

$array = [
  [
    'id' => 1,
    'name' => 'ffffff',
  ],
  [
    'id' => 2,
    'name' => 'fffggg',
  ],
  [
    'id' => 3,
    'name' => 'gggggg',
  ],
  [
    'id' => 4,
    'name' => 'aaaaaa',
  ],
];

$keyword = 'ggg';

$result = array_search_by_keyword($array,$keyword);
echo "<pre>";
var_dump($result);

$keyword = 1;

$result = array_search_by_key($array,$keyword);

var_dump($result);

