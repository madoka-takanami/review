<?php

const STATIONS = [
    ['東京', '秋葉原', '高田馬場'], 
    ['渋谷', '中央林間', '南町田グランベリーパーク']
];

define('LEN_YAMANOTE', count(STATIONS));
define('LEN_DENENTOSHI', count(STATIONS[0]));

for ($i = 0; $i < LEN_YAMANOTE; $i++) {
    for ($j = 0; $j < LEN_DENENTOSHI; $j++) {
        echo STATIONS[$i][$j] . ' ';
    }
    echo "\n";
}