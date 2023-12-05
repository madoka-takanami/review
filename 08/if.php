<?php

/**
 * PHPでconstを使うのは初めてだったので練習で書きました。
 */

date_default_timezone_set('UTC');

// 時間・分・秒を表す文字列です。
$hours = date('G');
$minutes = date('i');
$seconds = date('s');

define("HOURS", date('G'));
define("MINUTES", date('i'));
define("SECONDS", date('s'));

// 時間・分・秒を表す文字列型を整数型に変換しました。
$hours_val = intval($hours);
$minutes_val = intval($minutes);
$seconds_val = intval($seconds);

define("HOURS_VAL", intval(HOURS));
define("MINUTES_VAL", intval(MINUTES));
define("SECONDS_VAL", intval(SECONDS));

// 〇時〇分〇秒
echo $hours . "時" . $minutes . "分" . $seconds . "秒 (dynamic)\n";
echo HOURS . "時" . MINUTES . "分" . SECONDS . "秒 (const)\n";


// Ternary oeprator 分が偶数か奇数かを判定した結果を変数に格納します。
$is_even_or_odd = $minutes_val % 2 == 0 ? '偶数です' : '奇数です';
define("IS_EVEN_OR_ODD", MINUTES_VAL % 2 == 0 ? '偶数です' : '奇数です');

echo $is_even_or_odd . " (dynamic)\n";
echo IS_EVEN_OR_ODD . "(const)";

// Which dynamic or const should it be better to utilize? 