<?php

/**
 * テーブルを水平に表示させます。それぞれ関数で処理します。
 * th：西暦
 * td：干支
 * 
 * parameterについてはconfig-for-eto.phpに記載しています。
 */

 /**
  * テーブルの一段目にthとして西暦を表示させます。
  * @param [int] $total_year - 1990年から2023年の差を表し、for文の条件として使います。
  * @param [int] $start_year - 0から開始、33で終了します。
  * @return void
  */
function showYear(int $total_year, int $start_year): void {
    // Modify this function to display the Western calendar years in <th>
    for ($diff_year = 0; $diff_year <= $total_year; $diff_year++) {

        echo '<th scope="col">' . ($start_year + $diff_year) . '</th>';
    }
}

/**
 * テーブルの二段目にtdとして表示させます。
 * @param [int] $total_year - 1990年から2023年の差を表し、for文の条件として使います。
 * @param [array] $eto_list_arr - 干支のテキストデータを格納した配列です。西暦に対応する干支を取り出します。
 * @param [int] $cnt_eto_list - 配列の要素数です。
 * @return void
 */
function showEto(int $total_year, array $eto_list_arr, int $cnt_eto_list): void {
    // Modify this function to display the Chinese zodiac signs in <td>
    for ($index = 0, $diff_year = 0 ; $diff_year <= $total_year; $index++, $diff_year++) {

        if ($index >= $cnt_eto_list) {
            $index = 0;
        }

        echo '<td>' . $eto_list_arr[$index] . '</td>';
    }
}
