<?php

namespace Payments\Static;

class Counter
{
    const NAME = 'Counter';
    public static int $count = 0;
    public static function increment(): void
    {
        self::$count++;
    }

    public function decrement(): void
    {
        self::$count--;
    }

    public function plus(): void
    {
        self::$count++;
    }
}