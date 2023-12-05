<?php
/**
 * 年代別に対応した干支を表示させます。
 * コンソールで確認用なので独立したファイルです。
 */

declare(strict_types=1);

const ETO_LIST_ARR = ['午年', '未年', '申年', '酉年', '戌年', '亥年', '子年', '丑年', '寅年', '卯年', '辰年', '巳年']; // 0 - 11
define('CNT_ETO_LIST', count(ETO_LIST_ARR));

define('END_YEAR', intval(date('Y'))); // 2023
const START_YEAR = END_YEAR - 33; // 1990
const TOTAL_YEAR = END_YEAR - START_YEAR; // 33


for ($index = 0, $diff_year = 0; $index < TOTAL_YEAR; $index++, $diff_year++) {
    if ($index >= CNT_ETO_LIST) {
        $index = 0;
    }

    echo START_YEAR + $diff_year . ' ';
    echo ETO_LIST_ARR[$index] . "\n";

    if ($diff_year == TOTAL_YEAR) {
        break;
    }
}