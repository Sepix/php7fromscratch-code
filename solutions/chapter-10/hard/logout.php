<?php

// Continue Session

session_start();


// Destroying Session

session_unset();
session_destroy();


// Output Success

echo 'You have been successfully logged out';