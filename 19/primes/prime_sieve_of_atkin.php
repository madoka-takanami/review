<?php

/**
 * Modern Algorithm for the sieve of Atkin
 * 
 * $x, $y: 基本的な数学記号
 * $limit: ArgumentからParameterに渡す素数を割り出す最大値
 * $num: 本来はN(Natural Number)を表す数学記号, しかし、数学を学習していない方でも理解できるように$numとして定義しました。
 * 
 * 5以上の奇素数を軸に素数を探します。2と3を主処理に含めない理由はアトキンの櫛の性質上
 * 
 * Case: p = 4n + 1
 * pは平方因子を持たず、4x²+y²=pの自然数解が奇数個ある。
 * 4x²は偶数、yは奇数。
 * 
 * Case: p = 12n + 7
 * pは平方因子を持たず、3x²+y²=pの自然数解が奇数個ある。
 * xが偶数の場合3x²が12で割り切れるので、y²≡7 (mod 12)であるが数学的に不可能。
 * よってxは奇数、yは偶数。
 * 
 * 
 * case: p = 12n + 11
 * pは平方因子を持たず、3x²-y²=pの自然数解のうちx>yである組が奇数個ある。
 * xが偶数ならばyは奇数。xが奇数ならばyは偶数。
 * 
 * 参考文献：
 * Prime Sieves Using Binary Quadratic Forms
 * https://cr.yp.to/papers/primesieves.pdf
 * 難易度: ☆☆☆☆☆
 */

/**
 * 
 * $limitに格納した数まで素数を割り出します。
 * 
 * @param int $limit - 素数を割り出す最大値です。
 * @return array $primes - 割り出された素数を格納した配列です。
 */
function findPrimes(int $limit): array {
    // 数を素数か非素数かでマークするための配列を初期化します。
    $sieve = array_fill(0, $limit + 1, false);

    // xとyの値を制限内の平方根までループします。
    for ($x = 1; $x * $x <= $limit; $x++) {
        for ($y = 1; $y * $y <= $limit; $y++) {
            $num = (4 * $x * $x) + ($y * $y);

            // アトキンの櫛のアルゴリズムは、素数の特定の条件に基づいて数を変更することで素数を特定する性質があります。
            // そのためそれぞれの処理が独立しています。
            // FIX: アトキンの櫛の性質を無視せずに、並行処理を実現して欲しいです。
            if ($num <= $limit && ($num % 12 == 1 || $num % 12 == 5)) {
                $sieve[$num] = !$sieve[$num];
            }

            $num = (3 * $x * $x) + ($y * $y);
            if ($num <= $limit && $num % 12 == 7) {
                $sieve[$num] = !$sieve[$num];
            }

            $num = (3 * $x * $x) - ($y * $y);
            if ($x > $y && $num <= $limit && $num % 12 == 11) {
                $sieve[$num] = !$sieve[$num];
            }
        }
    }

    // 5以上の素数の2乗の倍数を排除します。
    for ($x = 5; $x * $x <= $limit; $x++) {
        if ($sieve[$x]) {
            for ($y = $x * $x; $y <= $limit; $y += $x * $x) {
                $sieve[$y] = false;
            }
        }
    }

    // 割り出される最初の数は5のため、あらかじめ2と3を配列に格納します。
    $primes = [2, 3];
    for ($index = 5; $index <= $limit; $index++) {
        if ($sieve[$index]) {
            $primes[] = $index;
        }
    }

    return $primes;
}

function showWhatAlgorithmIs() {
    echo '<h2>アトキンの篩で。。。 ！</h2>';
}
