<?php

// Including our files

require('calculations.php');
require('validation.php');

// Make sure our validation passes otherwise say there was an error

if( validate($_POST['number_1'], $_POST['number_2'], $_POST['method']) )
{
    // Use an elseif chain to determine what calculations to call

    $result = 0;

    if($_POST['method'] == 'plus')
    {
        $result = addition($_POST['number_1'], $_POST['number_2']);
    }
    elseif($_POST['method'] == 'minus')
    {
        $result = subtraction($_POST['number_1'], $_POST['number_2']);
    }
    elseif($_POST['method'] == 'times')
    {
        $result = multiplication($_POST['number_1'], $_POST['number_2']);
    }
    elseif($_POST['method'] == 'through')
    {
        $result = division($_POST['number_1'], $_POST['number_2']);
    }
    elseif($_POST['method'] == 'rest')
    {
        $result = modulo($_POST['number_1'], $_POST['number_2']);
    }
    elseif($_POST['method'] == 'power')
    {
        $result = power($_POST['number_1'], $_POST['number_2']);
    }

    // Output our result

    echo 'Your Result is: ' . $result;
}
else
{
    echo 'Your input was invalid! Please try again!';
}