<?php

// Setting the cookie

setcookie('weather', 'rainy', time() + 60 * 60);


// Deleting our Cookie by setting it 1 hour in the past

setcookie('weather', '', time() - 60 * 60);