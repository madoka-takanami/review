<?php

/**
 * テーブルを水平に表示させます。それぞれ関数で処理します。
 * th：番号
 * td：素数
 * 
 * 一度に一つまでincludeしてください。
 */

include 'prime_sieve_of_eratosthenes.php';
// include 'prime_sieve_of_sundaram.php';
// include 'prime_sieve_of_atkin.php';

/**
 * 配列の番号をthタグに追加します。
 *
 * @param [int] $primes_array_length - 配列の要素の数です。
 * @return void
 */
function showIndex(int $primes_array_length): void {
    
    for ($index = 0; $index < $primes_array_length; $index++) {

        echo '<th scope="col">' . $index . '</th>';
    }
}

/**
 * 素数をtdタグに追加します。
 * @param [type] $primes_array - 素数を格納した配列です。
 * @param [type] $primes_array_length - 配列の要素の数です。
 * @return void
 */
function showPrimes(array $primes_array, int $primes_array_length): void {

    for ($index = 0; $index < $primes_array_length; $index++) {
        
        echo '<td>' . $primes_array[$index] . '</td>';
    }
}
