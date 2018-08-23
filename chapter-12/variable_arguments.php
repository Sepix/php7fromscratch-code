<?php

// Sum up an unlimited amount of numbers

function addition(float ...$numbers) :float
{
    $sum = 0;

    foreach ($numbers as $n) {
        $sum += $n;
    }
    return $sum;
}

// Equals 5
echo addition(2, 3);

// Equals 9
echo addition(2, 3, 4);

// Equals 27
echo addition(2, 3, 4, 5, 6, 7);
