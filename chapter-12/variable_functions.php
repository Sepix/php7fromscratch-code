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

// Multiply an unlimited amount of numbers

function multiplication(float ...$numbers) :float
{
    $product = 0;

    foreach ($numbers as $n) {
        $product *= $n;
    }
    return $product;
}

$var = "addition";

// Equals 12
$var(5, 4, 3);

// Equals 3
$var(1, 1, 1);

$var = "multiplication";

// Equals 8
$var(2, 2, 2);

// Equals 27
$var(3, 3, 3);
