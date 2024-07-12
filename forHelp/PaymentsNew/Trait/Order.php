<?php

namespace Payments\Trait;

trait Order
{
    public int $orderId;

    public function __construct()
    {
        $this->id = 11;
    }

    public function getOrderId()
    {
        return $this->id;
    }
}