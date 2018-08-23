<?php

// String

$text = 'I like [i]cursive[/i] text';


// Replace tags with HTML

$text = str_replace('[i]', '<em>', $text);
$text = str_replace('[/i]', '</em>', $text);


// Output

echo $text;