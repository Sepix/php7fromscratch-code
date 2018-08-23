<?php

// Deleting our Cookie by setting it 1 hour in the past

setcookie('username', '', time() - 60 * 60);