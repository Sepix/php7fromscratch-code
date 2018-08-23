<?php

// NULL just stands for empty

$x = NULL;
$y = NULL;
$z = 17;


// echo the first variable that actually has a value | Outputs 17

echo $x ?? $y ?? $z;


// Also works with arrays;

$array['name'] = 'Thomas';


// If an index doesn't exist the ?? operator will also move on. | Outputs Thomas

echo $array['test'] ?? $array['foo'] ?? $array['bar'] ?? $array['name'];