<?php

// Init Session

session_start();


// Save value

$_SESSION['myvalue'] = 'It is working';


// Outputs "It is working"

echo $_SESSION['myvalue'];