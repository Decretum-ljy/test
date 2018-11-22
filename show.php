<?php
/**
 * Author: Liangjingyu (*^__^*)
 * Date: 2018/7/30
 * Time: 9:33
 * E-mail: liangjingyu@hbooker.com
 */
header("Content-type: text/html; charset=utf-8");
function show($var = null){
    if(empty($var)){
        echo 'null';
    }elseif(is_array($var) || is_object($var)){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }else{
        echo $var;
    }
}
