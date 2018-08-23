<?php

// Sum up an unlimited amount of numbers and has a configurable baseline

function addition($sum = 0, float ...$numbers) :float
{
    foreach ($numbers as $n) {
        $sum += $n;
    }
    return $sum;
}
