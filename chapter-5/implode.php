<?php

// Our Array

$fruits = array();

$fruits[] = 'Apple';
$fruits[] = 'Banana';
$fruits[] = 'Kiwi';


/*
 * If we var_dump() this we would get
 *
   * array(3) {
   *  [0]=> string(5) "Apple"
   *  [1]=> string(6) "Banana"
   *  [2]=> string(4) "Kiwi"
   * }
 *
   */


// Our String

$string = implode('_', $fruits);


// Apple_Banana_Kiwi

echo $string;