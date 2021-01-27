<?php


namespace Dtk\Util;


trait DocParserFactory
{
    private static $p;

    private function DocParserFactory()
    {
    }

    public static function getInstance()
    {
        if (self::$p == null) {
            self::$p = new DocParser ();
        }
        return self::$p;
    }
}