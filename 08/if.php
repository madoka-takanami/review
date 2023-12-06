<?php

date_default_timezone_set('UTC');

$hours = date('G');
$minutes = date('i');
$seconds = date('s');

define("HOURS", date('G'));
define("MINUTES", date('i'));
define("SECONDS", date('s'));

$hours_val = intval($hours);
$minutes_val = intval($minutes);
$seconds_val = intval($seconds);

define("HOURS_VAL", intval(HOURS));
define("MINUTES_VAL", intval(MINUTES));
define("SECONDS_VAL", intval(SECONDS));

echo $hours . "時" . $minutes . "分" . $seconds . "秒 (dynamic)\n";
echo HOURS . "時" . MINUTES . "分" . SECONDS . "秒 (const)\n";

$is_even_or_odd = $minutes_val % 2 == 0 ? '偶数です' : '奇数です';
define("IS_EVEN_OR_ODD", MINUTES_VAL % 2 == 0 ? '偶数です' : '奇数です');

echo $is_even_or_odd . " (dynamic)\n";
echo IS_EVEN_OR_ODD . "(const)";
