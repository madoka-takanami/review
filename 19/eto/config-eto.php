<?php

/**
 * 干支を格納した配列と年数を数値として定義しています。
 */

declare(strict_types=1);

// 0 - 11
const ETO_LIST_ARR = ['午年', '未年', '申年', '酉年', '戌年', '亥年', '子年', '丑年', '寅年', '卯年', '辰年', '巳年'];

 // 12
define('CNT_ETO_LIST', count(ETO_LIST_ARR));


// 2023　
define('END_YEAR', intval(date('Y'))); 

// 1990
const START_YEAR = END_YEAR - 33;

// 33
const TOTAL_YEAR = END_YEAR - START_YEAR;