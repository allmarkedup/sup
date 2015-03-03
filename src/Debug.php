<?php namespace Amu\Sup;

class Debug
{
    public static function dump($foo)
    {
        echo '<pre>';
        print_r($foo);
        echo '</pre>';
    }
}
