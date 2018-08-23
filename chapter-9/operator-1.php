<?php

/*
 * This will return false
 *
 * 5 is an integer while "5" is a string.
 * Even though both are equal they are not identical
 *
 */

if(5 === "5")
{
    // won't be called
}
else
{
    echo '5 is not identical to "5"';
}