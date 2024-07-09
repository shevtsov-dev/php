<?php
class Person {
    public $name;
    public $surname;
    public $age;
    public $profession;
    public $interests;
    public $email;
    public $login;
    public $password;


    public function __construct($name, $surname, $age, $login) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->login = $login;
    }

    public function getName() {
        echo 'Имя: ' . $this->name . PHP_EOL;
    }
    public function getSurname() {
        echo 'Фамилия: ' . $this->surname . PHP_EOL;
    }

    public function getAge() {
        echo 'Возраст: ' . $this->age . PHP_EOL;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function getProfession() {
        echo 'Профессия: ' . $this->profession . PHP_EOL;
    }

    public function setProfession($profession) {
        $this->profession = $profession;
        return $this;
    }

    public function getInterests() {
        echo 'Хобби: ' . $this->interests . PHP_EOL;
    }

    public function setInterests($interests) {
        $this->interests = $interests;
        return $this;
    }

    public function getEmail() {
        echo 'Электронная почта: ' . $this->email . PHP_EOL;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getLogin() {
        echo 'Логин: ' . $this->login . PHP_EOL;
    }

    public function getPassword() {
        echo 'Пароль: ' . $this->password . PHP_EOL;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getBaseInfo()
    {
        echo 'Имя: ' . $this->name . PHP_EOL;
        echo 'Фамилия: ' . $this->surname . PHP_EOL;
        echo 'Возраст: ' . $this->age . PHP_EOL;
    }

    public function getAllInfo()
    {
        echo 'Имя: ' . $this->name . PHP_EOL;
        echo 'Фамилия: ' . $this->surname . PHP_EOL;
        echo 'Возраст: ' . $this->age . PHP_EOL;
        echo 'Профессия: ' . $this->profession . PHP_EOL;
        echo 'Хобби: ' . $this->interests . PHP_EOL;
        echo 'Электронная почта: ' . $this->email . PHP_EOL;
        echo 'Логин: ' . $this->login . PHP_EOL;
        echo 'Пароль: ' . $this->password . PHP_EOL;
    }

    public function getConnectionInfo()
    {
        echo 'Электронная почта: ' . $this->email . PHP_EOL;
        echo 'Логин: ' . $this->login . PHP_EOL;
        echo 'Пароль: ' . $this->password . PHP_EOL;
    }
}
class Tech {
    public $name;
    public $model;
    public $age;
    public $color;
    public $price;

    public function __construct($name, $model, $age, $price) {
        $this->name = $name;
        $this->model = $model;
        $this->age = $age;
        $this->price = $price;
    }

    public function getName() {
        echo 'Название: ' . $this->name .PHP_EOL;
    }
    public function getModel() {
        echo 'Модель: ' . $this->model . PHP_EOL;
    }
    public function getAge() {
        echo 'Количество лет: ' . $this->age . PHP_EOL;
    }
    public function setAge($age) {
        $this->age = $age;
        return $this;
    }
    public function getColor() {
        echo 'Цена: ' . $this->color . PHP_EOL;
    }
    public function getPrice() {
        echo 'Цвет: ' . $this->price . PHP_EOL;
    }
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
    public function getAllInfo()
    {
        echo 'Название: ' . $this->name .PHP_EOL;
        echo 'Модель: ' . $this->model . PHP_EOL;
        echo 'Количество лет: ' . $this->age . PHP_EOL;
        echo 'Цена: ' . $this->color . PHP_EOL;
    }
}
/*class Mobile extends Tech{
    public $number;
}

class Laptop extends Tech {
    public $weight;
}*/


$roman = new Person('Roman', 'Shevtsov', 26, 'Ramirez');

$roman->getAllInfo();
$roman->email = 'roman.shevtsov@gmail.com';
$roman->password = 'no pass here';
$roman->profession = 'Web Dev';
$roman->interests = 'Chess, Football, Photo, Walking';
$roman->getAllInfo();

$nick = new Person('Nick', 'Artsemenko', 27, 'Gross');
$nick->getAllInfo();

