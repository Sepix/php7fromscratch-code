<?php

// Our text

$text = 'I [b]love[/b] swimming!';


// Let's translate that into HTML

$text = str_replace('[b]', '<strong>', $text);
$text = str_replace('[/b]', '</strong>', $text);


// Our text is now: "I <strong>love</strong> swimming!"

echo $text;