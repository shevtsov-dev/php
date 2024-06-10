<?php

// Это массив пользователей
$users = [
    ['id' => 12, 'name' => 'Yasha', 'email' => 'test@test.test'],
    ['id' => 13, 'name' => 'Yasha1', 'email' => 'test1@test.test']
];

// Преобразование массива в JSON
$jsonData = json_encode($users, JSON_PRETTY_PRINT);

// Сохранение данных в файл
file_put_contents('new_user.json', $jsonData);

echo "Данные пользователей успешно сохранены в new_user.json" . PHP_EOL;
?>