<?php

namespace Payments\Class\Asia;

use Payments\Abstract\PaymentsAsia;

class Alfa extends PaymentsAsia
{
    public const API_KEY = 'zdxfajsdkhfoqkweghipofqvu';

    /**
     * @deprecated Instead use: {@see Alfa::validationNew()}
     * @param $data
     * @return bool
     */
    public function validation($data): bool
    {

        // TODO: Implement validation() method.
        return false;
    }
    public function validationNew($data): bool
    {
        // TODO: Implement validation() method.
        return false;
    }
}