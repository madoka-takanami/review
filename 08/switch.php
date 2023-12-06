<?php

declare(strict_types=1);

$bottles;
const CNT = 99;

bottles_of_beer_on_wall(CNT);

function bottles_of_beer_on_wall(int $cnt): void
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
    
    if ($cnt > 0)
        bottles_of_beer_on_wall($cnt-1);
}
