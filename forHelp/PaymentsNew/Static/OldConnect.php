<?php

namespace Payments\Static;

class OldConnect
{
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }
    public static function test()
    {
        static::who();
    }
}

class OldConnectEx extends OldConnect
{
    public function testConnect()
    {
        return new OldConnect();
    }
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }
}