<?php

namespace Payments\Interface;

interface PaymentsRU
{
    public function setUserId(int $user_id): static;
    public function setOrderId(int $user_id): static;
    public function setPrice(int $user_id): static;
}