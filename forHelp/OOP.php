<?php
/**
 * Объектно-ориентированное программирование (ООП) в PHP предполагает использование объектов и классов для организации и структурирования кода. Давайте рассмотрим основные концепции ООП в PHP:
 *
 * Понятие объекта и класса:
 * Класс - это шаблон (структура) для создания объектов. Он определяет состояние (свойства) и поведение (методы) объектов.
 * Объект - это экземпляр класса. Он обладает свойствами и методами, определенными в классе.
 */

class Car {
    public $brand;
    public $model;

    public function startEngine() {
        return "Engine started!";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->model = "Corolla";
echo $myCar->startEngine(); // Output: Engine started!

/**
 * Методы и свойства класса:
 * Методы - функции класса, которые определяют его поведение.
 * Свойства - переменные класса, которые хранят его состояние.
 */

class Person {
    public $name;

    public function sayHello() {
        return "Hello, my name is " . $this->name;
    }
}

$person = new Person();
$person->name = "Alice";
echo $person->sayHello(); // Output: Hello, my name is Alice

/**
 * Конструктор и деструктор:
 * Конструктор - метод класса, который вызывается автоматически при создании нового объекта. Используется для инициализации объекта.
 * Деструктор - метод класса, который вызывается автоматически при удалении объекта. Используется для освобождения ресурсов.
 */

class Fruit {
    public $name;

    public function __construct($name) {
        $this->name = $name;
        echo "A new fruit {$this->name} is created.";
    }

    public function __destruct() {
        echo "The fruit {$this->name} is destroyed.";
    }
}

$apple = new Fruit("Apple");
unset($apple); // Output: The fruit Apple is destroyed.

/**
 * Магические методы:
 * Магические методы - это специальные методы, начинающиеся с двойного подчеркивания (__), которые предоставляют дополнительное функциональность.
 */

class User {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name] ?? null;
    }
}

$user = new User();
$user->name = "John";
echo $user->name; // Output: John

/**
 * В PHP ООП позволяет создавать модульный, структурированный и повторно используемый код. Изучение ООП в PHP поможет вам писать более эффективные и гибкие приложения.
 */