<?php

/**
 * テーブルを水平に表示させます。それぞれ関数で処理します。
 * th：番号
 * td：素数
 * 
 * 課題のレビュー対象ではありませんが、アルゴリズムとデータ構造を学習していた経験があるので、
 * 素数を割り出すアルゴリズムを三つ用意しました。難易度は、個人的に書いてて時間がかかった順に高いです。
 * 
 * 一度に一つまでincludeしてください。
 */

include 'prime_sieve_of_eratosthenes.php';
// include 'prime_sieve_of_sundaram.php';
// include 'prime_sieve_of_atkin.php';

/**
 * show indecies of the array saved prime numbers up to a given limit
 *
 * @param [int] $primes_array_length - The number of elements in $prime_array.
 * @return void
 */
function showIndex(int $primes_array_length): void {
    
    for ($index = 0; $index < $primes_array_length; $index++) {

        echo '<th scope="col">' . $index . '</th>';
    }
}

/**
 * show prime numbers up to a given limit
 * @param [type] $primes_array - The upper limit of the natural numbers to search for primes.
 * @param [type] $primes_array_length - An array containing prime numbers up to the specified limit.
 * @return void
 */
function showPrimes(array $primes_array, int $primes_array_length): void {

    for ($index = 0; $index < $primes_array_length; $index++) {
        
        echo '<td>' . $primes_array[$index] . '</td>';
    }
}