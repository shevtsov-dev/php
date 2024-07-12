<?php
namespace Payments\Class\Asia;

use Payments\Abstract\PaymentsEU;

class Sber extends PaymentsEU
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

    public function validation($data): bool
    {
        // TODO: Implement validation() method.
    }
}