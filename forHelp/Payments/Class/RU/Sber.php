<?php
namespace Payments\Class\EU;

use Payments\Abstract\PaymentsEU;
use Payments\Interface\PaymentsRU;

class Sber implements PaymentsRU
{
    public const API_KEY = 'sdfgsdfgsdfgsdfgsdfg';

    /**
     * Это ПЕРЕГРУЗКА
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $data = ['ПРОСТИ'];
        $this->data = $data;
        return $this;
    }

    public function setUserId(int $user_id): static
    {
        // TODO: Implement setUserId() method.
    }

    public function setOrderId(int $user_id): static
    {
        // TODO: Implement setOrderId() method.
    }

    public function setPrice(int $user_id): static
    {
        // TODO: Implement setPrice() method.
    }
}