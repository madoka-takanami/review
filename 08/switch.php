<?php

/**
 * switch構文の比較は厳密なため'==='となります。
 * つまり、値と型が完全に一致するかを確認します。
 * ※アルゴリズムとデータ構造について学んでいたため、再帰処理で書いてみました。
 */

$bottles;
const CNT = 99;

bottles_of_beer_on_wall(CNT);

/**
 * 有名なアルゴリズムの一つである99 bottles of beer on wallを実装しました。
 * 残りボトル数が一つになった時にbottlesからbottleとテキストを変えます。
 * ボトルがなくなった時にプログラムを終了します。
 * @param [type] $counter - ビールの残りボトル数をカウントします。
 * @return void - 再帰処理のため最終的な返り値はありません。
 */
function bottles_of_beer_on_wall($cnt)
{
    switch ($cnt)
    {   
        case 0:
            echo 'No bottles of beer on the wall.';
            break;
        case 1:
            $bottles = 'bottle';
            echo $cnt . " " .$bottles . " of beer.\n";
            echo "Take one down.\n";
            echo "Pass it around.\n\n";
            break;
        default:
            $bottles = 'bottles';
            echo " ";
            echo $cnt . " " . $bottles . " of beer on the wall.\n";
            echo "Take one down.\n";
            echo "Pass it around.\n";
            break;
    }

    // 再帰処理（recursive）
    if ($cnt > 0)
        bottles_of_beer_on_wall($cnt-1);
}