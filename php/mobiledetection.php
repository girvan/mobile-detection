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
else if(preg_match('/BlackBerry|\bBB10\b|rim[0-9]+/is',$ua)) // BalckBerry Phone
{
    $mobile_detection[] = 'blackberry';
    $mobile_detection[] = 'mobile';
}
else if(preg_match('/PlayBook|RIM Tablet/is',$ua)) // BlackBerry Tablet
{
    $mobile_detection[] = 'blackberry';
    $mobile_detection[] = 'tablet';
}
else if(preg_match('/Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7/is',$ua)) // Windows Phone
{
    $mobile_detection[] = 'wp';
    $mobile_detection[] = 'mobile';
}
else if(strpos($ua, 'windows nt')!==false && strpos($ua, 'touch')!==false) // Windows Tablet
{
    $mobile_detection[] = 'wp';
    $mobile_detection[] = 'tablet';
}

if(!empty($mobile_detection))
    $mobile_detection[] = 'touch';
$mobile_detection = implode(' ', $mobile_detection);
unset($ua);

