<?php

namespace Payments\Interface;

interface PaymentSetData
{
    public function validation($data): bool;
}