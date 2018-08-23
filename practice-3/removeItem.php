<?php

function removeItem($id)
{
    if(in_array($id, $_SESSION['cart']))
    {
        unset($_SESSION['cart'][$id]);

        return true;
    }

    return false;
}