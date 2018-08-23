<?php

// Calculating our expiration time

$expiration = time() + 60 * 60 * 24 * 7;


// Setting the cookie

setcookie('username', 'ironman', $expiration);