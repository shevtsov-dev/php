<?php

namespace Payments\Class\EU;

use Payments\Abstract\PaymentsEU;

class Alfa extends PaymentsEU
{
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    /**
     * @param $data
     * @return bool
     */
    public function validation($data): bool
    {
        // TODO: Implement validation() method.
    }
}