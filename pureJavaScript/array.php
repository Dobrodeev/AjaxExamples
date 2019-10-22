<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 22.10.2019
 * Time: 11:27
 */
$array = '[
{nodename: "test", nodetype: "dir", datetime: "02.10.2018 12:34:23"},
{nodetype: "file", nodename: "test2", datetime: "21.03.2018 23:40:23"},
{nodetype: "file", nodename: "fileapp.sh", datetime: "12:43:52"},
{nodetype: "dir", nodenane: "mydir", datetime: "03.12.2017 03:23:24"}
]';
$array2 = '{"nodename": "test", "nodetype": "dir", "datetime": "02.10.2018 12:34:23"}';
echo $array.'<br>';
//$decode = json_decode($array);
echo '<pre>';
print_r(json_decode($array2));
echo '</pre>';

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
echo '<hr>';
var_dump(json_decode($json, true));