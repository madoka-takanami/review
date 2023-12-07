<?php

declare(strict_types=1);

const ITEMS = [
    'cola' => 140,
    'orange' => 150,
    'monster' => 200
];

const ALLOWANCE = 300;
const IS_PURCHASED = 0;

foreach (ITEMS as $product => $price) {
    $isPurchased = vendingMachine($product, $price, ALLOWANCE);

    if ($isPurchased) {
        echo $product . " 買った\n";
    } else {
        echo $product . " 買ってへん\n";
    }
}

function vendingMachine(string $product, int $price, int $allowance): bool {
    
    if ($allowance < $price) {
        return false;
    }

    switch($product) {
        case 'cola':
        case 'orange':
        case 'monster':
            $allowance -= $price;
            return true;
        default:
            return false;
    }
}
