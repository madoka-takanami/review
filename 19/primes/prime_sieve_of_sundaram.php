<?php

/**
 * Archaic Algorithm for the sieve of Sundaram
 * 難易度: ☆☆
 * 
 * 偶数倍の数を予め排除します。
 * 奇数の中から素数を見つけるアルゴリズムなので、エラトステネスの櫛よりも効率が上がります。
 * 奇数の合成数は奇数の素因数しか持たない性質を利用します。
 * 奇数倍だけ数字を排除して素数を割り出します。
 * 
 * 参考文献：
 * Prime Numbers Comparison using Sieve of Eratosthenes and Sieve of Sundaram Algorithm
 * https://iopscience.iop.org/article/10.1088/1742-6596/978/1/012123/pdf
 */
/**
 * 
 * $limitに格納した数まで素数を割り出します。
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
