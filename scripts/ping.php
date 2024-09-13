
<?php

header('Access-Control-Allow-Origin: *');

function microtime_float() {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$start = microtime_float();
$fp = fsockopen('www.alrajhibank.com.sa', 80, $errno, $errstr, 30);
$end = microtime_float();
$ms = ($end - $start) * 1000;
$round = strval(floor($ms));

echo json_encode($round);

?>


