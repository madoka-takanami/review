<?php

declare(strict_types=1);

// 素数を100までとした最大値です。
const LIMIT = 100;

// 素数を格納した配列です。
define('PRIMES_ARR', findPrimes(LIMIT));

// 配列の要素数です。
define('PRIMES_ARR_LENGTH', count(PRIMES_ARR)); // 25