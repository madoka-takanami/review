<?php

$day = 1;

while($day <= 31) {
    
    $is_saturday = ($day % 7 === 6);

    if ($is_saturday)
    {
        echo '<span style="color: blue; padding: 1rem">' . $day . '</span>';
    } else if ($day % 7 === 0)
    {
        echo '<span style="color: red; padding: 1rem">' . $day . '</span><br>';
    }
    else
    {
        echo '<span style="padding: 1rem">' . $day . '</span>';
    }

    $day++;
}