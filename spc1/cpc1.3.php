<?php
/** 1*/
$arr = [a, b, c];
var_dump($arr);
echo $arr[0];
echo $arr[1];
echo $arr[2];
/** 2*/
echo $arr[0].$arr[1].$arr[2];
/** 3*/
$arr = [a, b, c, d];
echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.arr[3].','.$arr[0].'-'.arr[3].','.$arr[0].'/'.arr[3];
?>