<?php
$test = [1, 2, 'word', true];
var_dump($test[2]);
$test[2] = 'asdasda';
var_dump($test);
$test[4] = 'new value';
var_dump($test);
$test[] = 'another value';
var_dump($test);
array_push($test, 'pushe value');
var_dump($test);
$test = [ 
            'name' => 'Alissia', 
            'age' => 18,
            1,
            2,
            'grrrr',
            100 => 'new value',
            5
        ];
var_dump($test['name']);
var_dump($test);
$test = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($test[1][2]);