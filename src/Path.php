<?php namespace Amu\Sup;

class Path
{
    const DS = DIRECTORY_SEPARATOR;

    /**
     * Builds a path from the list of arguments.
     *
     * @return string
     */
    public static function join()
    {
        $parts = array();
        $count = 0;
        foreach (func_get_args() as $arg) {
            if ($count === 0) {
                if (! empty($arg)) {
                    $parts[] = rtrim($arg, self::DS);
                }
            } else {
                if (! empty($arg)) {
                    $parts[] = trim($arg, self::DS);
                }
            }
            $count++;
        }

        return rtrim(implode(self::DS, $parts), self::DS);
    }

    /**
     * Expands tilde to users home directory where available
     *
     * @return string
     */
    public static function normalize($path)
    {
        $rel = (strpos($path, '/') !== 0);
        $path = str_replace(array('/', '\\'), self::DS, $path);
        $parts = array_filter(explode(self::DS, $path), 'strlen');
        $absolutes = array();
        foreach ($parts as $part) {
            if ('.' == $part) continue;
            if ('..' == $part) {
                array_pop($absolutes);
            } else {
                $absolutes[] = $part;
            }
        }
        $path = ($rel ? '' : '/') .implode(self::DS, $absolutes);
        return isset($_SERVER['HOME']) ? Str::regexReplace($path, '^~', $_SERVER['HOME']) : $path;
    }
}