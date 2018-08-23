<?php

// Variables

$a = 10;
$b = 20;
$c = 30;


// Check to see which is the largest

if($a >= $b)
{
    if($a >= $c)
    {
        echo $a;
    }
    else
    {
        echo $c;
    }
}
else
{
    if($b >= $c)
    {
        echo $b;
    }
    else
    {
        echo $c;
    }
}