<?php

namespace Payments\Class\Asia;

use Payments\Abstract\PaymentsEU;

class Alfa extends PaymentsEU
{
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    public function validation($data): bool
    {
        // TODO: Implement validation() method.
        return false;
    }
}