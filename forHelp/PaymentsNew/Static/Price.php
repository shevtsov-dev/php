<?php

namespace Payments\Static;

class Price
{
    public int $price;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
    public static function convertToEu(int $price): string
    {
        return (string)$price . '.00';
    }
    public static function convertToRu(int $price): string
    {
        return (string)$price . '.000';
    }
    public static function convertToAsia(int $price): string
    {
        return (string)$price . '.0000';
    }
}