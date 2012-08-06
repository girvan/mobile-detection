<?php

class mobiledetection_test extends PHPUnit_Framework_TestCase
{

    public function testMobiledetection()
    {
        $devices = json_decode(file_get_contents(__DIR__ . '/../../javascript/_devices.json'), true);
        $devices_results = json_decode(file_get_contents(__DIR__ . '/../../javascript/_devices_results.json'), true);
        foreach($devices as $device=>$list)
        {
            foreach($list as $ua)
            {
                $_SERVER['HTTP_USER_AGENT'] = $ua;
                require __DIR__ . '/../mobiledetection.php';
                //echo $mobile_detection,"\r\n";
                $actual = explode(' ', $mobile_detection);
                sort($actual);
                $expected = explode(' ', $devices_results[$device]);
                sort($expected);
                $this->assertEquals($expected, $actual, $device . ': should be equal');
            }
        }
    }
}
