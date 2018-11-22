<?php
/**
 * Author: Liangjingyu (*^__^*)
 * Date: 2018/7/30
 * Time: 9:27
 * E-mail: liangjingyu@hbooker.com
 */
include 'show.php';
$pattern1 = '/[0-9]/';
$subject1 = 'asgf9gsd0ghf82';
$replcement1 = '两斤鱼';

$str1 = preg_replace($pattern1, $replcement1, $subject1);
$str2 = preg_filter($pattern1, $replcement1, $subject1);

show($str1);
echo '<hr/>';
show($str2);
echo '<hr/>';

$pattern2 = ['/[0123]/','/[456]/','/[789]/'];
$replcement2 = ['两','斤','鱼'];
$subject2 = ['asgf9','gsd','0ghf82'];
$str3 = preg_replace($pattern2, $replcement2, $subject2);
$str4 = preg_filter($pattern2, $replcement2, $subject2);//区别在于此函数会过滤掉未匹配到的数组元素
$arr1 = preg_grep($pattern1, $subject2);//preg_filter阉割版 区别在于只匹配不替换
$arr2 = preg_split($pattern1, $subject1);//将匹配到的位置作为分割
show($str3);
echo '<hr/>';
show($str4);
echo '<hr/>';
show($arr1);
echo '<hr/>';
show($arr2);
