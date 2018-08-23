<?php

// Continue Session

session_start();


// Greet User

echo 'Welcome ' . $_SESSION['username'] ?? 'Nobody';