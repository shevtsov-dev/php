<?php
namespace Payments\Class\EU;

use Payments\Abstract\PaymentsEU;
use Payments\Trait\Order;

class Tinkof extends PaymentsEU
{
    use Order;
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    /**
     * Это Полиморфизм
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $this->data = $data;

        $this->data['order_id'] = $this->getOrderId();
        var_dump('TINKOF EU');
        return $this;
    }

    public function validation($data): bool
    {
        // TODO: Implement validation() method.
        return true;
    }
}

