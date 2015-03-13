# Sup.

A collection of PHP support utilities to make common tasks a little less painful.

## Installation and use

Using composer:

```bash
$ composer require allmarkedup/sup
```

### Arrays

Array helpers are provided as static methods on the `Amu\Sup\Arr` class. Example:


```php
<?php

use Amu\Sup\Arr;

$array = [
    'foo',
    'bar' => [
        'numbers' => [123, 456, 3422]
    ]
];

$newArray = Arr::set($array, 'bar.letters', ['abc', 'def']);

// [
//    'foo',
//    'bar' => [
//        'numbers' => [123, 456, 3422],
//			'letters' => ['abc', 'def']
//    ]
// ];

```










