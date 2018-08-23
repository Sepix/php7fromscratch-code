<?php

// Our string (Who doesn't love Lorem Ipsum?)

$string = 'Lorem ipsum dolor sit amet';


// Let's explode it per whitespace

$parts = explode(' ', $string);


// var_dump() it to see how it looks

var_dump($parts);

/*
 * array(5) {
   *   [0]=> string(5) "Lorem"
   *   [1]=> string(5) "ipsum"
   *   [2]=> string(5) "dolor"
   *   [3]=> string(3) "sit"
   *   [4]=> string(4) "amet"
 * }
 */