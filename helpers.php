<?php
use Amu\Sup\Arr;
use Amu\Sup\Str;
use Amu\Sup\Debug;

if ( ! function_exists('sup_array_add'))
{
    /**
     * Add an element to an array using "dot" notation if it doesn't exist.
     *
     * @param  array   $array
     * @param  string  $key
     * @param  mixed   $value
     * @return array
     */
    function sup_array_add($array, $key, $value)
    {
        return Arr::add($array, $key, $value);
    }
}

if ( ! function_exists('sup_array_build'))
{
    /**
     * Build a new array using a callback.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    function sup_array_build($array, callable $callback)
    {
        return Arr::build($array, $callback);
    }
}

if ( ! function_exists('sup_array_divide'))
{
    /**
     * Divide an array into two arrays. One with keys and the other with values.
     *
     * @param  array  $array
     * @return array
     */
    function sup_array_divide($array)
    {
        return Arr::divide($array);
    }
}

if ( ! function_exists('sup_array_dot'))
{
    /**
     * Flatten a multi-dimensional associative array with dots.
     *
     * @param  array   $array
     * @param  string  $prepend
     * @return array
     */
    function sup_array_dot($array, $prepend = '')
    {
        return Arr::dot($array, $prepend);
    }
}

if ( ! function_exists('sup_array_except'))
{
    /**
     * Get all of the given array except for a specified array of items.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    function sup_array_except($array, $keys)
    {
        return Arr::except($array, $keys);
    }
}

if ( ! function_exists('sup_array_fetch'))
{
    /**
     * Fetch a flattened array of a nested array element.
     *
     * @param  array   $array
     * @param  string  $key
     * @return array
     */
    function sup_array_fetch($array, $key)
    {
        return Arr::fetch($array, $key);
    }
}

if ( ! function_exists('sup_array_first'))
{
    /**
     * Return the first element in an array passing a given truth test.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @param  mixed  $default
     * @return mixed
     */
    function sup_array_first($array, callable $callback, $default = null)
    {
        return Arr::first($array, $callback, $default);
    }
}

if ( ! function_exists('sup_array_last'))
{
    /**
     * Return the last element in an array passing a given truth test.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @param  mixed  $default
     * @return mixed
     */
    function sup_array_last($array, $callback, $default = null)
    {
        return Arr::last($array, $callback, $default);
    }
}

if ( ! function_exists('sup_array_flatten'))
{
    /**
     * Flatten a multi-dimensional array into a single level.
     *
     * @param  array  $array
     * @return array
     */
    function sup_array_flatten($array)
    {
        return Arr::flatten($array);
    }
}

if ( ! function_exists('sup_array_forget'))
{
    /**
     * Remove one or many array items from a given array using "dot" notation.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return void
     */
    function sup_array_forget(&$array, $keys)
    {
        return Arr::forget($array, $keys);
    }
}

if ( ! function_exists('sup_array_get'))
{
    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  array   $array
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function sup_array_get($array, $key, $default = null)
    {
        return Arr::get($array, $key, $default);
    }
}

if ( ! function_exists('sup_array_has'))
{
    /**
     * Check if an item exists in an array using "dot" notation.
     *
     * @param  array   $array
     * @param  string  $key
     * @return bool
     */
    function sup_array_has($array, $key)
    {
        return Arr::has($array, $key);
    }
}

if ( ! function_exists('sup_array_only'))
{
    /**
     * Get a subset of the items from the given array.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    function sup_array_only($array, $keys)
    {
        return Arr::only($array, $keys);
    }
}

if ( ! function_exists('sup_array_pluck'))
{
    /**
     * Pluck an array of values from an array.
     *
     * @param  array   $array
     * @param  string  $value
     * @param  string  $key
     * @return array
     */
    function sup_array_pluck($array, $value, $key = null)
    {
        return Arr::pluck($array, $value, $key);
    }
}

if ( ! function_exists('sup_array_pull'))
{
    /**
     * Get a value from the array, and remove it.
     *
     * @param  array   $array
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function sup_array_pull(&$array, $key, $default = null)
    {
        return Arr::pull($array, $key, $default);
    }
}

if ( ! function_exists('sup_array_set'))
{
    /**
     * Set an array item to a given value using "dot" notation.
     *
     * If no key is given to the method, the entire array will be replaced.
     *
     * @param  array   $array
     * @param  string  $key
     * @param  mixed   $value
     * @return array
     */
    function sup_array_set(&$array, $key, $value)
    {
        return Arr::set($array, $key, $value);
    }
}

if ( ! function_exists('sup_array_where'))
{
    /**
     * Filter the array using the given callback.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    function sup_array_where($array, callable $callback)
    {
        return Arr::where($array, $callback);
    }
}

if ( ! function_exists('sup_camel_case'))
{
    /**
     * Convert a value to camel case.
     *
     * @param  string  $value
     * @return string
     */
    function sup_camel_case($value)
    {
        return Str::camel($value);
    }
}

if ( ! function_exists('sup_class_basename'))
{
    /**
     * Get the class "basename" of the given object / class.
     *
     * @param  string|object  $class
     * @return string
     */
    function sup_class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;
        return basename(str_replace('\\', '/', $class));
    }
}

if ( ! function_exists('sup_data_get'))
{
    /**
     * Get an item from an array or object using "dot" notation.
     *
     * @param  mixed   $target
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function sup_data_get($target, $key, $default = null)
    {
        if (is_null($key)) return $target;
        foreach (explode('.', $key) as $segment)
        {
            if (is_array($target))
            {
                if ( ! array_key_exists($segment, $target))
                {
                    return sup_value($default);
                }
                $target = $target[$segment];
            }
            elseif ($target instanceof ArrayAccess)
            {
                if ( ! isset($target[$segment]))
                {
                    return sup_value($default);
                }
                $target = $target[$segment];
            }
            elseif (is_object($target))
            {
                if ( ! isset($target->{$segment}))
                {
                    return sup_value($default);
                }
                $target = $target->{$segment};
            }
            else
            {
                return sup_value($default);
            }
        }
        return $target;
    }
}

if ( ! function_exists('sup_dd'))
{
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function sup_dd()
    {
        Debug::dump(func_get_args());
        die;
    }
}

if ( ! function_exists('sup_e'))
{
    /**
     * Escape HTML entities in a string.
     *
     * @param  string  $value
     * @return string
     */
    function sup_e($value)
    {
        return htmlentities($value, ENT_QUOTES, 'UTF-8', false);
    }
}

if ( ! function_exists('sup_ends_with'))
{
    /**
     * Determine if a given string ends with a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function sup_ends_with($haystack, $needles)
    {
        return Str::endsWith($haystack, $needles);
    }
}

if ( ! function_exists('sup_array_head'))
{
    /**
     * Get the first element of an array. Useful for method chaining.
     *
     * @param  array  $array
     * @return mixed
     */
    function sup_array_head($array)
    {
        return reset($array);
    }
}

if ( ! function_exists('sup_array_last'))
{
    /**
     * Get the last element from an array.
     *
     * @param  array  $array
     * @return mixed
     */
    function sup_array_last($array)
    {
        return end($array);
    }
}

if ( ! function_exists('sup_object_get'))
{
    /**
     * Get an item from an object using "dot" notation.
     *
     * @param  object  $object
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function sup_object_get($object, $key, $default = null)
    {
        if (is_null($key) || trim($key) == '') return $object;
        foreach (explode('.', $key) as $segment)
        {
            if ( ! is_object($object) || ! isset($object->{$segment}))
            {
                return value($default);
            }
            $object = $object->{$segment};
        }
        return $object;
    }
}

if ( ! function_exists('sup_preg_replace_sub'))
{
    /**
     * Replace a given pattern with each value in the array in sequentially.
     *
     * @param  string  $pattern
     * @param  array   $replacements
     * @param  string  $subject
     * @return string
     */
    function sup_preg_replace_sub($pattern, &$replacements, $subject)
    {
        return preg_replace_callback($pattern, function($match) use (&$replacements)
        {
            return array_shift($replacements);
        }, $subject);
    }
}

if ( ! function_exists('sup_snake_case'))
{
    /**
     * Convert a string to snake case.
     *
     * @param  string  $value
     * @param  string  $delimiter
     * @return string
     */
    function sup_snake_case($value, $delimiter = '_')
    {
        return Str::snake($value, $delimiter);
    }
}

if ( ! function_exists('sup_starts_with'))
{
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function sup_starts_with($haystack, $needles)
    {
        return Str::startsWith($haystack, $needles);
    }
}

if ( ! function_exists('sup_str_contains'))
{
    /**
     * Determine if a given string contains a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function sup_str_contains($haystack, $needles)
    {
        return Str::contains($haystack, $needles);
    }
}

if ( ! function_exists('sup_str_finish'))
{
    /**
     * Cap a string with a single instance of a given value.
     *
     * @param  string  $value
     * @param  string  $cap
     * @return string
     */
    function sup_str_finish($value, $cap)
    {
        return Str::finish($value, $cap);
    }
}

if ( ! function_exists('sup_str_is'))
{
    /**
     * Determine if a given string matches a given pattern.
     *
     * @param  string  $pattern
     * @param  string  $value
     * @return bool
     */
    function sup_str_is($pattern, $value)
    {
        return Str::is($pattern, $value);
    }
}

if ( ! function_exists('sup_str_limit'))
{
    /**
     * Limit the number of characters in a string.
     *
     * @param  string  $value
     * @param  int     $limit
     * @param  string  $end
     * @return string
     */
    function sup_str_limit($value, $limit = 100, $end = '...')
    {
        return Str::limit($value, $limit, $end);
    }
}

if ( ! function_exists('sup_str_plural'))
{
    /**
     * Get the plural form of an English word.
     *
     * @param  string  $value
     * @param  int     $count
     * @return string
     */
    function sup_str_plural($value, $count = 2)
    {
        return Str::plural($value, $count);
    }
}

if ( ! function_exists('sup_str_random'))
{
    /**
     * Generate a more truly "random" alpha-numeric string.
     *
     * @param  int  $length
     * @return string
     *
     * @throws \RuntimeException
     */
    function sup_str_random($length = 16)
    {
        return Str::random($length);
    }
}

if ( ! function_exists('sup_str_replace_array'))
{
    /**
     * Replace a given value in the string sequentially with an array.
     *
     * @param  string  $search
     * @param  array   $replace
     * @param  string  $subject
     * @return string
     */
    function sup_str_replace_array($search, array $replace, $subject)
    {
        foreach ($replace as $value)
        {
            $subject = preg_replace('/'.$search.'/', $value, $subject, 1);
        }
        return $subject;
    }
}

if ( ! function_exists('sup_str_singular'))
{
    /**
     * Get the singular form of an English word.
     *
     * @param  string  $value
     * @return string
     */
    function sup_str_singular($value)
    {
        return Str::singular($value);
    }
}

if ( ! function_exists('sup_str_slug'))
{
    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param  string  $title
     * @param  string  $separator
     * @return string
     */
    function sup_str_slug($title, $separator = '-')
    {
        return Str::slug($title, $separator);
    }
}

if ( ! function_exists('sup_studly_case'))
{
    /**
     * Convert a value to studly caps case.
     *
     * @param  string  $value
     * @return string
     */
    function sup_studly_case($value)
    {
        return Str::studly($value);
    }
}

if ( ! function_exists('sup_value'))
{
    /**
     * Return the default value of the given value.
     *
     * @param  mixed  $value
     * @return mixed
     */
    function sup_value($value)
    {
        return $value instanceof Closure ? $value() : $value;
    }
}

if ( ! function_exists('sup_with'))
{
    /**
     * Return the given object. Useful for chaining.
     *
     * @param  mixed  $object
     * @return mixed
     */
    function sup_with($object)
    {
        return $object;
    }
}