<?php

$counter = 5;

// while(true) would be endless

while(true)
{
    echo $counter . '<br>';

    $counter++;

    if($counter > 5)
    {
        break;
    }
}

// Will Output: 5