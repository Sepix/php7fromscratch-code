<?php

  // Create the string

  $string = 'I love to eat';


  // Explode it

  $parts = explode(' ', $string);


  // Add food to array

  $parts[] = 'Pizza';


  // Implode it

  $string = implode(' ', $parts);


  // Output

  echo $string;