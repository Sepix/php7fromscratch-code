<?php

// An array with the array() syntax

$foo = array('Apple', 'Banana', 'Pear');

echo $foo[0];               // will output Apple
echo $foo[1];               // will output Banana
echo $foo[2];               // will output Pear


// An array with the $name[index] = value; syntax

$foo[3] = 'Kiwi';

echo $foo[3];               // will output Kiwi


// No index specified. This will be attached to the end.

$foo[] = 'Chestnut';

echo $foo[4];               // will output Chestnut


// An array with the [] syntax

$my_array = ['a', 'b', 'c', 'd'];

echo $my_array[0];          // will output a
echo $my_array[1];          // will output b
echo $my_array[2];          // will output c
echo $my_array[3];          // will output d


// Associative Arrays

$bar = array(
    'fruit' => 'Apple',
    'vegetable' => 'Carrot',
    'animal' => 'Dog'
);

echo $bar['fruit'];         // will output Apple
echo $bar['vegetable'];     // will output Carrot
echo $bar['animal'];        // will output Dog

$bar['gender'] = 'male';

echo $bar['gender'];        // will output male