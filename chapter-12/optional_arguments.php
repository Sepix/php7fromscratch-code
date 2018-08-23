<?php

// Sum up 2 numbers

function addition($a, $b, $c = 10)
{
    return $a + $b + $c;
}

echo addition(10, 10); // Equals 30
echo addition(10, 10, 5); // Equals 25