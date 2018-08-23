<?php

// Empty Array

$numbers = [];


// Loop

for($i = 2; $i <= 20; $i++)
{
    if($i % 2 == 0)
    {
        $numbers[] = $i;
    }
}

var_dump($numbers);