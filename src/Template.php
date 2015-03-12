<?php namespace Amu\Sup;

class Template
{
    /**
     * Render a simple PHP template
     *
     * @param string $path
     * @param array  $args
     *
     * @return string
     */
    public static function render($path, $args = [])
    {
        if (! file_exists($path)) {
            throw new TplException('The file ' . $path . ' could not be found.');
        }
        extract($args);
        ob_start();
        include $path;
        $contents = ob_get_contents();
        ob_end_clean();
        
        return $contents;
    }

}

class TemplateException extends \Exception
{
}