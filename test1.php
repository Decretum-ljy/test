<?php
/**
 * Author: Liangjingyu (*^__^*)
 * Date: 2018/8/21
 * Time: 17:15
 * E-mail: liangjingyu@hbooker.com
 */
header("Content-type:text/html;charset=utf-8");
//$size = mcrypt_get_iv_size(MCRYPT_CAST_128, MCRYPT_MODE_CFB);
//$random = mcrypt_create_iv($size,MCRYPT_DEV_URANDOM);
//$encode = base64_encode($random);
//echo $random;
//$header_cate = substr('index-zhaiwen', strrpos('index-zhaiwen', '-')+1);
//var_dump($header_cate);
//date_default_timezone_set('PRC');
//echo date('Y-m-d H:i:s',time());

//$arr = ['1','2'];
//
//$output = var_export($arr,true);
//file_put_contents('aaaaa123456',$output.'aaaaaa',FILE_APPEND);
//echo __DIR__;

//$str = "43fdf测试转化fdsfadaf43543543职工，问防 盗锁 防盗鞍山市是否安防5345gfdgd";
//preg_match_all("/[0-9]{1}/",$str,$arrNum);
//preg_match_all("/[a-zA-Z]{1}/",$str,$arrAl);
//preg_match_all('/[\x{4e00}-\x{9fff}]+/u',$str,$arrCh);
//echo "</pre>";
//echo "数字个数:".count($arrNum[0])."<br/>";
//echo "字母个数:".count($arrAl[0])."<br/>";
//$count = 0;
//foreach ($arrCh[0] as $ch){
//    $count += count(preg_split('/(?<!^)(?!$)/u', $ch ));
//}
//echo "中文个数:".$count;
//$a = [1000=>[100035216=>"2018-11-09 10:00:00",100035229=>"2018-11-09 10:00:00",100035220=>"2018-11-09 10:00:00"]];
//$a = json_encode($a);
//var_dump($a);

// $json = '{
// "2116245":{"100035216":"2018-11-09 10:00:00","100035229":"2018-11-09 10:00:00","100035220":"2018-11-09 10:00:00"},
// "1234567":{"100035217":"2018-11-09 10:00:00","100035228":"2018-11-09 10:00:00","100035221":"2018-11-09 10:00:00"}
// }';
//$arr = json_decode($json,true);
// var_dump($arr);
//$arr = [];
//$arr = array_flip($arr);
//$arr = array_flip($arr);
//$arr = array_merge($arr);
//print_r($arr);

//$arr = ['111','222','3333','222'];
//$arr = array_unique($arr);
//$arr = array_slice($arr,0,2);
//print_r($arr);

//phpinfo();


$shelf_id = 2116245;
$book_id = 100035214;
$hKey = 'shelfbook_'.$shelf_id;
$orders = ['zonghe','last_read_time'];
$ssKey= $hKey.'.'.$orders[0];
$redis = new Redis();
$redis->connect("localhost",6379);
$redis->auth("dummy");
$score =  $redis->zScore('hlsk_development.ss_'.$ssKey,$book_id);
var_dump($score);

?>
<!--<script>-->
<!--    var a = 99;            // 全局变量a-->
<!--    f();                   // f是函数，虽然定义在调用的后面，但是函数声明会提升到作用域的顶部。-->
<!--    console.log(a);        // a=>99,  此时是全局变量的a-->
<!--    function f() {-->
<!--        console.log(a);      // 当前的a变量是下面变量a声明提升后，默认值undefined-->
<!--        var a = 10;-->
<!--        console.log(a);      // a => 10-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script>-->
<!--for (var i=0 ;i<5;i++){-->
<!--setTimeout(function () {-->
<!--console.log(i);-->
<!--// console.log('abcde')-->
<!--},1000);-->
<!--}-->
<!--</script>-->
