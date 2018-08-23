<?php

function addItem($id, $name, $price, $quantity)
{
    // If Item is already in the cart Just increase it's quantity

    if(in_array($id, $_SESSION['cart']))
    {
        $_SESSION['cart'][$id]['quantity'] += $quantity;

        return true;
    }

    // Add Item to Cart

    $_SESSION['cart'][$id] = [
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
    ];

    return true;
}