<?php
/**
 * Created by PhpStorm.
 * User: lamb
 * Date: 2017/6/4
 * Time: 上午3:35
 */
error_reporting( E_ALL );

$handle = popen('cd /www/wwwroot/sxzhihui.rushangkeji.com && git pull 2>&1','r');
$read   = stream_get_contents($handle);
printf($read);
pclose($handle);