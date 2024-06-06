<?php
function echoConsole($text, $data = []): void
{
    echo $text . PHP_EOL;
    if (!empty($data)) {
        var_dump($data);
        echo PHP_EOL;
    }
}

//PHP предоставляет мощные инструменты для работы с массивами, что делает их одним из наиболее популярных типов данных в этом языке программирования.
//Давай поговорим о некоторых основных аспектах работы с массивами.
//В PHP массивы могут быть индексированными или ассоциативными.
//Индексированные массивы хранят элементы в порядке, определяемом их числовыми ключами.
//Ассоциативные массивы используют строковые ключи для доступа к элементам.
//Важно помнить, что начальный индекс в PHP массивах также начинается с 0.

//<editor-fold desc="Индексированные Массивы">
$int = [3, 2, 1];
echoConsole('Массив чисел', $int);

$string = ['title', 'description', 'three'];
echoConsole('Массив строк', $string);

$bool = [true, false, 1 > 0];
echoConsole('Массив логических выражений', $bool);

$mixed = [true, 'two', 3];
echoConsole('смешанный массив', $mixed);
//</editor-fold>

//<editor-fold desc="Ассоциативные массивы">

$key = 'fruit';
$value = 'apple';
$array[$key] = $value;
echoConsole('База array', $array);

$user = [
    'id' => 10001,
    'name' => 'Yasha',
    'age' => 27,
    'email' => 'test@test.test',
    'city' => 'New York'
];
echoConsole('База User', $user);
echoConsole('Отдельное поле User', $user['name']);
//</editor-fold>

//<editor-fold desc="Многомерные массивы">

$key = 'Фрукт';
$array[$key]['Имя'] = "Яблоко";
$array[$key]['Дерево'] = 'Большое';
$array[$key]['Цена'] = '1$';
echoConsole('База многомерного массива', $array);

$user = [
    [
        'id' => 10001,
        'name' => 'Yasha27',
        'age' => 27,
        'email' => 'test27@test.test',
        'city' => 'New York'
    ],
    [
        'id' => 10002,
        'name' => 'Yasha20',
        'age' => 20,
        'email' => 'test20@test.test',
        'city' => 'New York'
    ],
    [
        'id' => 10003,
        'name' => 'Yasha13',
        'age' => 13,
        'email' => 'test13@test.test',
        'city' => 'New York'
    ],
];
echoConsole('База User', $user);
echoConsole('Отдельное поле User', $user[1]['name']);
//</editor-fold>

//<editor-fold desc="Функции">
echoConsole('Добавление элемента в массив:');
$array = [1, 2, 3];
echoConsole('Было', $array);

array_push($array, 4);

echoConsole('Стало', $array);

echoConsole('Удаление последнего элемента:');
array_pop($array);
echoConsole('Стало', $array);

echoConsole('Объединение массивов:');
$array1 = [4, 9];
$array2 = [14, 19];
$array = array_merge($array1, $array2);
echoConsole('Стало', $array);

echoConsole('Поиск элемента:');
$key = array_search(9, $array);
echoConsole('Стало', $key);

echoConsole('Сортировка элементов по возрастанию:');
sort($array);
echoConsole('Стало', $array);

echoConsole('Сортировка элементов по убыванию:');
rsort($array);
echoConsole('Стало', $array);

echoConsole('Удаление дублирующихся элементов:');
$uniqueArray = array_unique($array);
echoConsole('Стало', $uniqueArray);

echoConsole('Возвращает количество элементов в массиве:');
echoConsole('Стало', count($array));

echoConsole('Извлекает и возвращает первый элемент массива');
echoConsole('Стало', array_shift($array));
echoConsole('Стало', $array);

$array = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry',
    'd' => 'dddddd'
];

echoConsole('Преобразование в обычный (индексированный) массив:');
echoConsole('Стало', array_values($array));

echoConsole('Возвращает массив ключей:');
echoConsole('Стало', array_keys($array));

echoConsole('Проверка наличия элемента в массиве:');
echoConsole('Стало', in_array('banana', $array));

echoConsole('Обрезка массива:');
echoConsole('Стало', array_slice($array, 1, 2));

echoConsole('Поиск элемента со значением и возвращение его ключа:');
echoConsole('Стало', array_search('dddddd', $array));

echoConsole('Меняет порядок элементов на обратный:');
echoConsole('Стало', array_reverse($array));

echoConsole('Проверка, является ли переменная массивом:');
echoConsole('Стало', is_array($array));

foreach ($array as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}
//array_map!!!!!!!!!!!!!!!!!!
//count!!!!!!!!!!!!!!!!!!
//in_array!!!!!!!!!!!!!!!!!!
//array_key_exists
//array_merge
//array_reverse
//array_search
//array_unique
//array_filter
//array_chunk
//array_column

//array_rand
//</editor-fold>