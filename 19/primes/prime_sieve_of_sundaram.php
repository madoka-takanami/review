<?php

/**
 * Archaic Algorithm for the sieve of Sundaram
 */

/**
 * 100まで素数を割り出します。
 * 
 * @param int $limit - 素数を割り出す最大値です。
 * @return array $primes - 割り出された素数を格納した配列です。
 */
function findPrimes(int $limit): array {

    $k = ceil(($limit - 1) / 2);
    $arr = array_fill(1, $k, true);

    for ($i = 1; $i < $k; $i++) {
        $j = $i;
        $index = $i + $j + 2 * $i * $j;

        while ($index <= $k) {
            $arr[$index] = false;
            $j += 1;
            $index = $i + $j + 2 * $i * $j;
        }
    }

    $primes = [2];
    
    for ($i = 1; $i < $k; $i++) {

        if ($arr[$i] === true) {
            $primes[] = 2 * $i + 1;
        }
    }

    return $primes;
}

function showWhatAlgorithmIs() {
    echo '<h2>サンダラムの篩で。。。！</h2>';
}
