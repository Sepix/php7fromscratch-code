<?php

// Start Session

session_start();


// Set Value

$_SESSION['weather'] = 'Sunny';


// Output

echo $_SESSION['weather'];