<?php

declare(strict_types=1);

define('BIO', array('Shakespeare', 'Hamlet', 13, '1564-04-26T20:21:00'));
$my_bio = BIO;

echo "-------------- オブジェクトの情報を表示 --------------\n";
echo var_dump(BIO) . "\n";
echo var_dump($my_bio) . "\n\n";

echo "-------------- 要素の数を表示 --------------\n";
echo "The length of the object is " . count(BIO) . "\n\n";

showElement(BIO);
popElement(BIO);

$my_bio[0] = 'Itsuki Kajiya';
$my_bio[1] = 'Ataria';
$my_bio[2] = 25;
$my_bio[3] = '1998-04-11';

array_push($my_bio, 'Osaka');
array_push($my_bio, 'Vulnerable');
array_push($my_bio, 'Warmhearted');
array_push($my_bio, 'Humorous');
array_push($my_bio, 'Anthropophobia');

showElement($my_bio);
popElement($my_bio);

/**
 * 要素を一つずつ前から表示
 * @param [array] $bio - 自分の特性を要素として格納した配列です。
 * @return void
 */
function showElement(array $object_of_bio): void {
    echo "-------------- オブジェクトの要素を表示 --------------\n";

    $len_bio = count($object_of_bio);

    for ($i = 0; $i < $len_bio; $i++)
    {
        echo " " . $object_of_bio[$i] . "\n";
    }
}

/**
 * 取り出した要素を表示
 * @param [type] $element_of_bio - 自分の特性を要素として格納した配列です。
 * @return void
 */
function popElement(array $object_of_bio): void {
    echo "-------------- 取り出したオブジェクトの要素を表示 --------------\n";

    $len_bio = count($object_of_bio);

    for ($i = 0; $i < $len_bio; $i++)
    {
        echo " " . array_pop($object_of_bio) . " is poped out!\n";
    }
}
