<?php

function validate($a, $b, $method)
{
    // If a or b is empty we set it to 0

    if($a == "")
    {
        $a = 0;
    }

    if($b == "")
    {
        $b = 0;
    }

    // $a or $b needs to be numeric, otherwise we won't continue

    if( ! is_numeric($a) || ! is_numeric($b))
    {
        return false;
    }

    // If we are trying to divide or use modulo then $b can't be null

    if($method == 'through' || $method == 'rest')
    {
        if($b === 0)
        {
            return false;
        }
    }

    // If all went well we return true

    return true;
}