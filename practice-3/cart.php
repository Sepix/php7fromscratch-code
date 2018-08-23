<?php

// Starting Session

session_start();


// Creating Cart Variable if it doesn't exit;

$_SESSION['cart'] ?? $_SESSION['cart'] = [];

?>