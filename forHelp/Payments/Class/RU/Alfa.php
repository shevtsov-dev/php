<?php

namespace Payments\Class\EU;

use Payments\Abstract\PaymentsEU;
use Payments\Interface\PaymentsRU;

class Alfa implements PaymentsRU
{
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    /**
     * @param int $user_id
     * @return $this
     */
    public function setUserId(int $user_id): static
    {
        // TODO: Implement setUserId() method.
    }

    /**
     * @param int $user_id
     * @return $this
     */
    public function setOrderId(int $user_id): static
    {
        // TODO: Implement setOrderId() method.
    }

    /**
     * @param int $user_id
     * @return $this
     */
    public function setPrice(int $user_id): static
    {
        // TODO: Implement setPrice() method.
    }
}