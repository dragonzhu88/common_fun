<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-11-18
 * Time: 上午10:16
 */


$arrayList = [
  [
    'id' => 1,
    'age' => 2,
  ],
  [
    'id' => 4,
    'age' => 5,
  ],
  [
    'id' => 2,
    'age' => 8,
  ],
  [
    'id' => 3,
    'age' => 1,
  ],
  [
    'id' => 6,
    'age' => 9,
  ],

];

$field = 'id';
$type = 'SORT_ASC';


/**
 * @todo 数组按字段排序
 * @param $arrayList
 * @param $field
 * @param $type
 * @return mixed
 */
function sequence_sort($arrayList, $field, $type) {
  $arrSort = array();
  foreach ($arrayList as $uniqid => $row) {
    foreach ($row as $key => $value) {
      $arrSort[$key][$uniqid] = $value;
    }
  }
  array_multisort($arrSort[$field], constant($type), $arrayList);
  return $arrayList;

}
echo "<pre>";
var_dump(sequence_sort($arrayList, $field, $type));