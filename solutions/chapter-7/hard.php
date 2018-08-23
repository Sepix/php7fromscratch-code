<?php

// Function to calculate the sum of 4 numbers

function sum_it_up($a, $b, $c, $d)
{
    $result = $a + $b + $c + $d;

    return $result;
}


// Method to output data

function my_own_print($text)
{
    echo $text;
}


/*
 * Method i_got_this
 * Takes 4 numbers, sums them up and outputs the result
 */

function i_got_this($num1, $num2, $num3, $num4)
{
    $output = sum_it_up($num1, $num2, $num3, $num4);

    my_own_print($output);
}


// Using it. Outputs 10

i_got_this(1, 2, 3, 4);