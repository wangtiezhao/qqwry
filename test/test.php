<?php
/**
 * Created by PhpStorm.
 * User: tiezhao
 * Date: 2017/11/30
 * Time: 22:28
 */
require __DIR__.'/../vendor/autoload.php';
$qqwry=new \Tiezhao\qqwry();
for($i=0;$i<100;$i++){
    $long=mt_rand();
    $ip=long2ip($long);
    $res=$qqwry->ip2addr($ip);
    echo "$ip:{$res['country']}-{$res['area']}\n";
}
