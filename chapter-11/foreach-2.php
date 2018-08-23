<?php

// Building our Array

$numbers = [
    'one'   => 1,
    'two'   => 2,
    'three' => 3,
    'four'  => 4,
    'five'  => 5
];


// A foreach example with the optional index

foreach($numbers as $index => $value)
{
    echo $index . ' - ' . $value . '<br>';
}

/*
 * one - 1
 * two - 2
 * three - 3
 * four - 4
 * five - 5
 */