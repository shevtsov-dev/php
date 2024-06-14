<?php

// Функция для создания папки, если она не существует
function createDirectoryIfNotExists($dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Функция для сохранения данных в файл
function saveUserData($userData, $fileName) {
    createDirectoryIfNotExists('user');
    $filePath = 'user/' . $fileName;
    file_put_contents($filePath, json_encode($userData, JSON_PRETTY_PRINT));
}

// Функция для вывода всех пользователей
function displayAllUsers() {
    $dir = 'user';
    if (is_dir($dir)) {
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                $filePath = $dir . '/' . $file;
                $userData = json_decode(file_get_contents($filePath), true);
                echo "<br> ID: " . $userData['id'];
                echo "<br> Name: " . $userData['name'];
                echo "<br> Email: " . $userData['email'];
                echo "<br> Created At: " . $userData['created_at'];
                echo "<br>--------------------------<br>";
            }
        }
    } else {
        echo "Папка 'user' не существует.<br>";
    }
}

// Обработка данных из GET параметров
if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['email'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $created_at = date('d/m/Y H:i:s');

    $userData = [
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'created_at' => $created_at
    ];

    $fileName = $id . $name . '.txt';
    saveUserData($userData, $fileName);

    echo "Данные пользователя успешно сохранены в $fileName<br>";
}

// Обработка данных из файла
if (file_exists('new_user.json')) {
    $jsonData = file_get_contents('new_user.json');
    $users = json_decode($jsonData, true);

    foreach ($users as $user) {
        $user['created_at'] = date('d/m/Y H:i:s');
        $fileName = $user['id'] . $user['name'] . '.txt';
        saveUserData($user, $fileName);
    }

    echo "Данные пользователей из файла успешно сохранены<br>";
}

// Вывод всех пользователей
if (isset($_GET['action']) && $_GET['action'] === 'display_all') {
    displayAllUsers();
}
?>


