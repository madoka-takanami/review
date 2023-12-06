<?php

declare(strict_types=1);
const LIMIT = 100;
define('PRIMES_ARR', findPrimes(LIMIT));
define('PRIMES_ARR_LENGTH', count(PRIMES_ARR)); // 25
