<?php

namespace Abstract;

use Interface\BaseInfo;

class Human implements BaseInfo
{
    public string $name;
    public string $surname;
    public string $gender;
    public int $age;
    public int $height;
    public int $weight;
    public string $gmail;
    public string $login;
    public string $password;
    public int $number;

    public function getBaseInfo(): void
    {
        echo 'Имя: ' . $this->name . PHP_EOL;
        echo 'Фамилия: ' . $this->surname . PHP_EOL;
        echo 'Возраст: ' .$this->age . PHP_EOL;
        echo 'Пол: ' .$this->gender . PHP_EOL;
        echo '___________________________________________' . PHP_EOL;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function getLogin(): string
    {
        return 'Логин: ' . $this->login;
    }
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }
    public function getGmail(): string
    {
        return 'Электронная почта: ' . $this->gmail;
    }
    public function setGmail(string $gmail): void
    {
        $this->gmail = $gmail;
    }
    public function getAllInfo(): void
    {
        echo 'Имя: ' . $this->name . PHP_EOL;
        echo 'Фамилия: ' . $this->surname . PHP_EOL;
        echo 'Возраст: ' . $this->age . PHP_EOL;
        echo 'Пол: ' . $this->gender . PHP_EOL;
        echo 'Рост: ' . $this->height . PHP_EOL;
        echo 'Вес: ' . $this->weight . PHP_EOL;
        echo 'Электронная почта: ' . $this->gmail . PHP_EOL;
        echo 'Логин: ' . $this->login . PHP_EOL;
        echo 'Пароль: ' . $this->password . PHP_EOL;
        echo 'Номер телефона: ' . $this->number . PHP_EOL;
        echo '___________________________________________' . PHP_EOL;

    }
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this -> password = $password;
    }

    public function getHeight(): int
    {
        return $this -> height;
    }

    public function setHeight(int $height): void
    {
        $this -> height = $height;
    }

    public function getWeight(): int
    {
       return $this -> weight;
    }

    public function setWeight(int $weight): void
    {
        $this -> weight = $weight;
    }

    public function getNumber(): int
    {
        return $this -> number;
    }

    public function setNumber(string $number): void
    {
        $this -> number = $number;
    }
}
