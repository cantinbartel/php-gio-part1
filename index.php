<?php

require './helpers.php';

/* List all Files and Directories for the given path */

$dir = scandir(__DIR__);

$prettyPrintArray($dir);

$lineBreak();


/* Check if it is a file or directory */

var_dump(is_dir($dir[2]));

$lineBreak();

var_dump(is_file($dir[2]));

$lineBreak();


/* Create and Remove directories */

// mkdir('test_directory');

// rmdir('test_directory'); // has to be an empty diorectory otherwise we'll get a warning

// mkdir('test_directory/test_sub_directory', recursive: true);

// rmdir('test_directory/test_sub_directory');


/* Check if file exists */

// if (file_exists('test.txt')) {
//     echo filesize('test.txt');
//     $lineBreak();
//     file_put_contents('test.txt', 'This is a file for test purpose.');
//     clearstatcache();
//     echo filesize('test.txt');
// } else {
//     echo 'File not found';
// }


/* Opening a file and Reading it line by line */

// $file = fopen('test.txt', 'r'); // Resource => a variable that refers to an external resource => stream, file and so on...

// if file does not exist fopen will throw a warning
// to supress this warning we can use @ like so => $file = @fopen('test.txt', 'r')
// But better to have a good Error Handling

if (! file_exists('test.txt')) {
    echo 'File not found';
    return;
}

$file = fopen('test.txt', 'r');

var_dump($file);

while($line = fgets($file) !== false) {
    echo $line . '<br>';
}

fclose($file);

// fwrite();  // to writein a file

$lineBreak();

$content = file_get_contents('test.txt');

echo $content;

// file_put_contents('test.txt', ' Text appened.',FILE_APPEND);

// unlink('test.txt');  // to delete a file

// copy('foo.txt', 'bar.txt');

// rename('foo.txt', 'bar.txt');
