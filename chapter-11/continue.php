<?php

// Building our Array

$the_planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupiter', 'Saturn'];


foreach($the_planets as $planet)
{
    // We don't want to list earth

    if($planet == 'Earth')
    {
        continue;
    }

    echo $planet . '<br>';
}