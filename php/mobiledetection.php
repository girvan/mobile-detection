<?php

$ua = strtolower(isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
$mobile_detection = array();
if(strpos($ua, 'ipad')!==false)
    $mobile_detection[] = 'ipad ios tablet';
else if(strpos($ua, 'iphone')!==false)
    $mobile_detection[] = 'iphone ios mobile';
else if(strpos($ua, 'android')!==false)
{
    $mobile_detection[] = 'android';
    if(strpos($ua, 'mobile')===false)
        $mobile_detection[] = 'tablet';
    else
        $mobile_detection[] = 'mobile';
}

if(!empty($mobile_detection))
    $mobile_detection[] = 'touch';
$mobile_detection = implode(' ', $mobile_detection);
unset($ua);

