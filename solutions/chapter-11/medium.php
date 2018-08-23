<?php

// Building our Array

$girlfriends = [
    'Monday'    => 'Monica',
    'Tuesday'   => 'Erika',
    'Wednesday' => 'Rita',
    'Thursday'  => 'Tina',
    'Friday'    => 'Sandra',
    'Saturday'  => 'Mary',
    'Sunday'    => 'Jessica'
];


// The loop

foreach($girlfriends as $day => $name)
{
    echo 'I see ' . $name . ' on ' . $day . '<br>';
}