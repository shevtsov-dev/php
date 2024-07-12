<?php

namespace Class;

use Abstract\Human;

class Friends extends Human
{
    public function __construct(string $name, string $surname, int $age, string $gender) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gender = $gender;
    }
}
