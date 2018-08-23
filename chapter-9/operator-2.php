<?php

/*
 * This will return true
 *
 * 5 is an integer while "5" is a string.
 * They are not identical
 *
 */

if(5 !== "5")
{
    echo '5 is not identical to "5"';
}
else
{
    // won't be called
}