<?php

require '../vendor/autoload.php';

$arr = [
    'test' => [
        'foo' => 123,
        'bar' => [
            'asdasd'
        ]
    ]
];

$arr = array_add($arr, 'test.foos','asdasd');

dd($arr);