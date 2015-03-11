<?php namespace Amu\Sup;

use Purl\Url as Purl;

class Url
{
    /**
     * Return the host portion of the URL
     * i.e. http://abc.foo.co.uk/this/path => abc.foo.co.uk
     *
     * @return string
     */
    public static function host($url)
    {
        return (string) Purl::parse($url)->host;
    }

    /**
     * Return the subdomain portion of the URL
     * i.e. http://abc.foo.co.uk/this/path => abc
     *
     * @return string
     */
    public static function subdomain($url)
    {
        return (string) Purl::parse($url)->subdomain;
    }

    /**
     * Return the registerable domain portion of the URL
     * i.e. http://abc.foo.co.uk/this/path => foo.co.uk
     *
     * @return string
     */
    public static function domain($url)
    {
        return (string) Purl::parse($url)->registerableDomain;
    }

    /**
     * Return the public suffix (TLD) portion of the URL
     * i.e. http://abc.foo.co.uk/this/path => co.uk
     *
     * @return string
     */
    public static function tld($url)
    {
        return (string) Purl::parse($url)->publicSuffix;
    }

    /**
     * Return the host minus the public suffix (TLD) of the URL
     * i.e. http://abc.foo.co.uk/this/path => abc.foo
     *
     * @return string
     */
    public static function hostWithoutTld($url)
    {
        $url = Purl::parse($url);
        return Str::removeRight($url->host, '.' . $url->publicSuffix);
    }

    /**
     * Return the registerable domain minus the public suffix (TLD) of the URL
     * i.e. http://abc.foo.co.uk/this/path => foo
     *
     * @return string
     */
    public static function domainWithoutTld($url)
    {
        $url = Purl::parse($url);
        return Str::removeRight($url->registerableDomain, '.' . $url->publicSuffix);
    }

    /**
     * Return the path portion of the URL
     * i.e. http://abc.foo.co.uk/this/path => this/path
     *
     * @return string
     */
    public static function path($url)
    {
        return (string) Purl::parse($url)->path;
    }
        
}