<?php

// Init Session

session_start();


// Save Value

$_SESSION['myvalue'] = 'Testing';


// Unset Session

session_unset();


// Will error

echo $_SESSION['myvalue'];