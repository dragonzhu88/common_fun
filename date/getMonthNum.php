<?php
/**
 * Created by PhpStorm.
 * User: zdc
 * Date: 16-11-18
 * Time: 上午10:56
 */

$data1 = 1462395905; //2016.5.5 5:5:5
$data2 = 1478293505; //2016.11.5.5. 5:5:5


/**
 *
 * @param $date1 起始日期时间戳
 * @param $date2 终止日期时间戳
 * @return number
 */
function getMonthNum($date1, $date2) {

  list($date_1['y'], $date_1['m']) = explode("-", date('Y-m', $date1));
  list($date_2['y'], $date_2['m']) = explode("-", date('Y-m', $date2));
  return abs($date_1['y'] - $date_2['y']) * 12 + $date_2['m'] - $date_1['m'];
}

echo getMonthNum($data1,$data2);