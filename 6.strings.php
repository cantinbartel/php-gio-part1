<?php

/* STRINGS */

$x = 1;
$y = 2;

// Heredoc - treats text like if it ws in ""
$text = <<<TEXT
    Line$x
    Line$y
    Line3
TEXT;

echo nl2br($text); // nl2br - new line to browser
 
// Nowdoc - treats text like if it ws in ''
$text2 = <<<'TEXT'
    Line4
    Line5
    Line6
TEXT;
