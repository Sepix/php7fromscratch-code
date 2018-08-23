<?php

// Init Session

session_start();


// Save Value

$_SESSION['myvalue'] = 'Testing';


// Unset & Destroy the Session

session_unset();
session_destroy();

echo 'Session got destroyed';