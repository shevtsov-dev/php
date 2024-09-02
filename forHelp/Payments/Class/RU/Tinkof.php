<?php
namespace Payments\Class\EU;

use Payments\Abstract\PaymentsEU;
use Payments\Interface\PaymentsRU;

class Tinkof implements PaymentsRU
{
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    /**
     * Это Полиморфизм
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        var_dump('TINKOF EU');
        return $this;
    }

    public function validation($data): bool
    {
        // TODO: Implement validation() method.
        return true;
    }


    public function setOrderId(int $user_id): static
    {
        // TODO: Implement setOrderId() method.
    }

    public function setPrice(int $user_id): static
    {
        // TODO: Implement setPrice() method.
    }

    public function setUserId(int $user_id): static
    {
        // TODO: Implement setUserId() method.
    }
}

