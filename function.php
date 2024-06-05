<?php

//<editor-fold desc="Базовые функции">

//echo Функция echo используется для вывода одного или нескольких значений. Она не имеет возвращаемого значения.
$str = "Привет, мир!";
echo $str;

//print Функция print используется для вывода одного значения. Она всегда возвращает значение 1.
$str = "Привет, мир!";
print $str;

//count Функция count используется для подсчета количества элементов в массиве или объекте
$arr = [1, 2, 3, 4, 5];
echo count($arr);

//strlen Функция strlen используется для подсчета числа символов в строке.
$str = "Hello, World!";
echo strlen($str);

//strtolower Функция strtolower преобразует строку в нижний регистр.
$str = "Hello, World!";
echo strtolower($str);

//strtoupper Функция strtoupper преобразует строку в верхний регистр
$str = "Hello, World!";
echo strtoupper($str);

//is_numeric Функция is_numeric используется для проверки, является ли значение числом.
$num = 123;
if (is_numeric($num)) {
    echo "Число";
} else {
    echo "Не число";
}

//trim Функция trim удаляет пробелы (или другие символы) с начала и конца строки.
$str = "   Привет, мир!   ";
echo trim($str);

//explode Функция explode разбивает строку на подстроки по заданному разделителю и возвращает массив подстрок
$str = "1,2,3,4,7,8,9";
$arr = explode(",", $str);
print_r($arr);

//implode Функция implode объединяет элементы массива в строку с использованием заданного разделителя
$arr = ["Красный", "Зеленый", "Синий"];
$str = implode(" - ", $arr);
echo $str;

//substr Функция substr возвращает подстроку из строки, начиная с указанной позиции и заданной длины.
$str = "Это длинная строка";
echo substr($str, 4, 7);

//str_replace Функция str_replace заменяет все вхождения строки поиска на строку замены в заданной строке.
$str = "Я люблю JavaScript";
echo str_replace("JavaScript", "PHP", $str);

//date Функция date форматирует текущую дату и время.
echo date("Y-m-d H:i:s");

//date_diff Функция date_diff используется для вычисления разницы между двумя датами.
$date1 = new DateTime("2022-03-01");
$date2 = new DateTime("2022-03-10");
$interval = date_diff($date1, $date2);
echo $interval->format('%R%a days');

//array_merge Функция array_merge объединяет два или более массивов в один массив.
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$merged = array_merge($arr1, $arr2);
print_r($merged);

//array_key_exists Функция array_key_exists проверяет, существует ли указанный ключ в массиве.
$arr = ["name" => "Alice", "age" => 25];
if (array_key_exists("name", $arr)) {
    echo "Key 'name' exists in the array.";
}

//file_get_contents Функция file_get_contents считывает содержимое файла в строку.
$content = file_get_contents("example.txt");
echo $content;

//file_put_contents Функция file_put_contents записывает строку в файл.
$text = "Hello, World!";
file_put_contents("example.txt", $text);

//</editor-fold>

//<editor-fold desc="Функции">
/**
 * Функция, которая принимает массив чисел и возвращает их среднее значение
 * @param $nums
 * @return float|int
 */
function average($nums): float|int
{
    $sum = array_sum($nums);
    $count = count($nums);
    return $sum / $count;
}

$numbers = [2, 4, 6, 8, 10];
echo "Среднее значение: " . average($numbers) . PHP_EOL;

/**
 * Функция, которая проверяет является ли число четным или нечетным
 * @param $num
 * @return string
 */
function isEven($num): string
{
    if ($num % 2 == 0) {
        return "$num - четное число" . PHP_EOL;
    } else {
        return "$num - нечетное число" . PHP_EOL;
    }
}

echo isEven(10);
echo isEven(7);

/**
 * Функция, которая принимает два аргумента и возвращает их сумму
 * @param $a
 * @param $b
 * @return mixed
 */
function sum($a, $b): mixed
{
    return $a + $b;
}

$result = sum(5, 3);
echo "Сумма: $result" . PHP_EOL;
//</editor-fold>

//<editor-fold desc="Ссылки">
/**
 * Простая функция, которая выводит приветственное сообщение
 * @param $name
 * @return void
 */
function greeting(&$name): void
{
    $name = "Привет, $name!" . PHP_EOL;
}

$person = "Миша";
greeting($person);
echo $person;

function sumL($a, $b, &$result): void
{
    $result = $a + $b;
}

$num1 = 5;
$num2 = 3;
sumL($num1, $num2, $sumResult);
echo "Сумма: $sumResult" . PHP_EOL;

function averageL($nums, &$avg): void
{
    $sum = array_sum($nums);
    $count = count($nums);
    $avg = $sum / $count;
}

$numbers = [2, 4, 6, 8, 10];
$averageResult = 0;
averageL($numbers, $averageResult);
echo "Среднее значение: $averageResult" . PHP_EOL;
//</editor-fold>

//<editor-fold desc="Рекурсия">
/**
 * Функция, которая вычисляет факториал числа с использованием рекурсии
 * @param $n
 * @return float|int
 */
function factorial($n): float|int
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5;
$factorialResult = factorial($number);
echo "Факториал числа $number: $factorialResult";
//</editor-fold>

//<editor-fold desc="Анонимные и стрелочные функции">
/**
 * Анонимная функция, которая умножает число на само себя
 * @param $x
 * @return int
 */
$double = function($x): int {
    return $x * $x;
};

echo $double(5);

/**
 * Стрелочная функция, которая объединяет две строки
 * @param $str1
 * @param $str2
 * @return string
 */
$concat = fn($str1, $str2): string => $str1 . $str2;

echo $concat("Привет, ", "мир!");

//</editor-fold>

//<editor-fold desc="Функции обратного вызова">
/**
 * Функция, которая принимает другую функцию в качестве аргумента и вызывает ее
 * @param $numbers
 * @param $callback
 * @return mixed
 */
function processNumbers($numbers, $callback): mixed
{
    $result = array_map($callback, $numbers);
    return $result;
}

/**
 * Функция, которая умножает число на 2
 * @param $num
 * @return float|int
 */
function multiplyByTwo($num): float|int
{
    return $num * 2;
}
$numbers = [1, 2, 3, 4, 5];

//Вызов функции processNumbers с функцией обратного вызова multiplyByTwo
$processedNumbers = processNumbers($numbers, 'multiplyByTwo');

print_r($processedNumbers);
//</editor-fold>

//<editor-fold desc="Эксперт">

function variableParamsExample(...$params): void
{
    $count = count($params);

    echo "Количество параметров: $count\n";

    foreach ($params as $index => $param) {
        echo "Параметр $index: $param\n";
    }
}
variableParamsExample("первый", "второй", "третий");
variableParamsExample("один", "два", "три", "четыре", "пять");
variableParamsExample("hello");

function greet($name = "Гость"): void
{
    echo "Привет, $name!";
}

greet(); // Выведет: Привет, Гость!
greet("Иван"); // Выведет: Привет, Иван!

function sumA() {
    $args = func_get_args();
    $total = 0;
    foreach ($args as $arg) {
        $total += $arg;
    }
    return $total;
}

echo sumA(1, 2, 3, 4);

//</editor-fold>