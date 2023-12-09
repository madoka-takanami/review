<?php

/**
 * テーブルを垂直に表示させます。
 * 
 */

function showEtoListVertically(): void {
    for ($index = 0, $diff_year = 0; $index < TOTAL_YEAR; $index++, $diff_year++) {

        echo '<tr class="table-primary">';
        if ($index >= CNT_ETO_LIST) {
            $index = 0;
        }
    
        echo '<td>' . START_YEAR + $diff_year . '</td>';
        echo '<td>' . ETO_LIST_ARR[$index] . '</td>';
    
        if ($diff_year == TOTAL_YEAR) {
            break;
        }
        echo '</tr>';
    }
}