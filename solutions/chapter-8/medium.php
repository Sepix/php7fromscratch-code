<?php

// If Block

if(7 < 10)
{
    // If Block Inside If

    if(7 > 6)
    {
        echo '7 is bigger than 6';
    }
    else
    {
        // does not happen

        echo '7 is smaller than 6';
    }
}
else
{
    // does not happen

    echo '7 is bigger than 10';
}