<?php
/**
 * Author: Liangjingyu (*^__^*)
 * Date: 2018/7/29
 * Time: 16:41
 * E-mail: liangjingyu@hbooker.com
 */
include 'show.php';
$pattern = '/[0-9]/';
$subject = 'asgf9gsd0ghf82';

$m1 = $m2 = array();
preg_match($pattern, $subject, $m1);
preg_match_all($pattern, $subject, $m2);

show($m1);
echo '</hr>';
show($m2);


