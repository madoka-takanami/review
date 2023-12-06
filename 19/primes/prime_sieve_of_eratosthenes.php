<?php

/**
 * Archaic Algorithm for the sieve of Eratosthenes
 */

/**
 * 100まで素数を割り出します。
 * 
 * @param int $limit - 素数を割り出す最大値です。
 * @return array $primes - 割り出された素数を格納した配列です。
 */
function findPrimes(int $limit): array {
    
    for ($i = 2; $i <= $limit; $i++) {
        $arr[$i] = true;
    }

    for ($i = 2; $i <= $limit; $i++) {

        if ($arr[$i] == true) {
            $j = $i ** 2;

            while ($j <= $limit) {
                $arr[$j] = false;
                $j += $i;
            }
        }
    }

    $primes = [];

    for ($i = 2; $i <= $limit; $i++) {

        if ($arr[$i] === true) {
            $primes[] = $i;
        }
    }

    return $primes;
}


function showWhatAlgorithmIs() {
    echo '<h2>エラトステネスの篩で。。。！</h2>';
}
