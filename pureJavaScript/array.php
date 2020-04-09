<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 22.10.2019
 * Time: 11:27
 */
/*$array = '[
{nodename: "test", nodetype: "dir", datetime: "02.10.2018 12:34:23"},
{nodetype: "file", nodename: "test2", datetime: "21.03.2018 23:40:23"},
{nodetype: "file", nodename: "fileapp.sh", datetime: "12:43:52"},
{nodetype: "dir", nodenane: "mydir", datetime: "03.12.2017 03:23:24"}
]';
$array2 = '{"nodename": "test", "nodetype": "dir", "datetime": "02.10.2018 12:34:23"}';*/
//echo $array.'<br>';
//$decode = json_decode($array);
/*echo '<pre>';
print_r(json_decode($array2));
echo '</pre>';

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
echo '<hr>';
var_dump(json_decode($json, true));*/

/*$hello = 'Hello!';
for ($i = 0; $i < strlen($hello); $i ++ ){
    echo substr($hello, $i, 1);
}
echo 'Однажды Арнольд сказал: "I\'ll be back"';
echo '<br>';
for ($i = 0; $i <= 3; $i ++){
    echo $hello[$i];
}
echo $hello[strlen($hello) - 1];*/
echo 'Индексный массив: <br>';
$array3 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
for ($i = 0; $i < count($array3); $i++) {
    echo $array3[$i].' ';
}
echo '<br>';
echo 'Индексный массив в обратном порядке: <br>';
for ($i = count($array3) - 1; $i >= 0; $i--) {
    echo $array3[$i].' ';
}
echo '<br>';
$keys = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j'];
$array4 = array_combine($keys, $array3);
/*krsort($array4);
echo '<pre>';
print_r($array4);
echo '</pre>';
echo 'Третий элемент: '.$array4[3].'<br>';*/
echo 'Ассоциативный массив из букв английского алфавита: <br>';
foreach ($array4 as $key => $value) {
    echo $key.'=>'.$value.' ';
}
echo '<pre>';
print_r($array4);
echo '</pre>';
echo '<br>';
foreach (array_reverse($array4) as $i => $value) {
    echo $value.' ';
}
echo '<br>';
foreach ($array4 as $i => $value) {
    echo $value.' ';
}
echo '<br>';
//Еще один вариант реверсивного перебора. Будет работать также с ассоциативными массивами. Предварительный реверс массива не требуется, поэтому будет эффективнее
$array = ["zero", "one", "two", "three", "four"];
echo 'Ассоциативный массив: <br>';
foreach ($array as $value) {
    echo $value.' ';
}
echo '<br>';
echo 'Ассоциативный массив в обратном порядке: <br>';
for (end($array); ($key = key($array)) !== null; prev($array)) {
    print($key." : ".current($array)."\n");
}