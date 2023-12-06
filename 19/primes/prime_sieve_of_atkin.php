<?php

/**
 * Modern Algorithm for the sieve of Atkin
 */

/**
 * 100まで素数を割り出します。
 * 
 * @param int $limit - 素数を割り出す最大値です。
 * @return array $primes - 割り出された素数を格納した配列です。
 */
function findPrimes(int $limit): array {
    // Initialize the sieve array
    $sieve = array_fill(0, $limit + 1, false);

    for ($x = 1; $x * $x <= $limit; $x++) {
        for ($y = 1; $y * $y <= $limit; $y++) {
            $n = (4 * $x * $x) + ($y * $y);
            if ($n <= $limit && ($n % 12 == 1 || $n % 12 == 5)) {
                $sieve[$n] = !$sieve[$n];
            }

            $n = (3 * $x * $x) + ($y * $y);
            if ($n <= $limit && $n % 12 == 7) {
                $sieve[$n] = !$sieve[$n];
            }

            $n = (3 * $x * $x) - ($y * $y);
            if ($x > $y && $n <= $limit && $n % 12 == 11) {
                $sieve[$n] = !$sieve[$n];
            }
        }
    }

    for ($x = 5; $x * $x <= $limit; $x++) {
        if ($sieve[$x]) {
            for ($y = $x * $x; $y <= $limit; $y += $x * $x) {
                $sieve[$y] = false;
            }
        }
    }

    // 割り出される最初の数は5のため、あらかじめ2と3を配列に格納します。
    $primes = [2, 3];
    for ($i = 5; $i <= $limit; $i++) {
        if ($sieve[$i]) {
            $primes[] = $i;
        }
    }

    return $primes;
}

function showWhatAlgorithmIs() {
    echo '<h2>アトキンの篩で。。。 ！</h2>';
}
