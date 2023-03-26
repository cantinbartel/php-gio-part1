<?php

/* ARRAYS */

// $progammingLanguages = array('PHP', 'Java', 'Python');
$progammingLanguages = ['PHP', 'Java', 'Python'];

echo '<pre>';
print_r($progammingLanguages);
echo '</pre>';

echo '<br>';
echo count($progammingLanguages);

// Add element to the array

$progammingLanguages[] = 'C++';

echo '<pre>';
print_r($progammingLanguages);
echo '</pre>';

echo '<br>';
echo count($progammingLanguages);

array_push($progammingLanguages, 'C#', 'Go', 'Javascript');

echo '<pre>';
print_r($progammingLanguages);
echo '</pre>';

echo '<br>';
echo count($progammingLanguages);

// Associative Arrays

$progammingLanguages2 = [
    'php' => '8.2', 
    'python' => '3.9'
];

echo '<pre>';
print_r($progammingLanguages2);
echo '</pre>';

echo '<br>';
echo $progammingLanguages2['php'];

$progammingLanguages2['go'] = '1.15';

echo '<br>';
echo '<pre>';
print_r($progammingLanguages2);
echo '</pre>';

$programmingLanguages3 = [
    'php' => [
        'creator' => 'Rasmus Lerdof',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => 'true',
        'versions' => [
            [
                'version' => 8,
                'releaseDate' => 'Nov 26, 2020'
            ],
            [
                'version' => 7.4,
                'releaseDate' => 'Nov 28, 2019'
            ]
        ]
            ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => 'true',
        'versions' => [
            [
                'version' => 3.5,
                'releaseDate' => 'Oct 5, 2020'
            ],
            [
                'version' => 3.4,
                'releaseDate' => 'oct 14, 2019'
            ]
        ]
    ]
];

echo '<br>';
echo '<pre>';
print_r($programmingLanguages3);
echo '</pre>';

echo '<br>';
echo ($programmingLanguages3['php']['versions'][0]['releaseDate']);

// array_pop($array) removes the last element of an array
// array_shift removes($array) the first element of an array
// unset($array) destroies the entire array if no index / key is specified
// unset($array['c']) removes the element which has 'c' as a key

$arr = ['a', 'b', 20 => 'c', 'd', 'e'];

unset($arr[1], $arr[2]);

echo '<br>';
echo '<pre>';
print_r($arr);
echo '</pre>';
