<?php

// Empty Array

$numbers = [];


// Loop

for($i = 2; $i <= 20; $i++)
{
    if($i % 2 != 0)
    {
        continue;
    }

    $numbers[] = $i;
}

var_dump($numbers);