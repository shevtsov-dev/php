<?php
namespace Payments\Class\EU;

use Payments\Abstract\PaymentsEU;

class Tinkof extends PaymentsEU
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
}

