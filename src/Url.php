<?php namespace Amu\Sup;

use League\Url\Url as LeagueUrl;

class Url
{
    public static function domain($url = null)
    {
        return (string) self::getUrl($url)->getHost();
    }

    public static function path($url = null)
    {
        return (string) self::getUrl($url)->getPath();
    }

    protected static function getUrl($url = null)
    {
        if ($url) {
            return LeagueUrl::createFromUrl($url);
        } else {
            return LeagueUrl::createFromServer($_SERVER);
        }
    }
}