<?php

function editItem($id, $quantity)
{
    if(in_array($id, $_SESSION['cart']))
    {
        $_SESSION['cart'][$id]['quantity'] += $quantity;

        return true;
    }

    return false;
}