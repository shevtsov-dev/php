<?php
// Функция для сохранения данных в файл
function saveUserData($userData, $fileName) {
    $filePath = 'user/' . $fileName;
    file_put_contents($filePath, json_encode($userData, JSON_PRETTY_PRINT));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $firstName = $_POST['firstName'];
    $secondName = $_POST['secondName'];
    $login = $_POST['login'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

$userData = [
    'firstName' => $firstName,
    'secondName' => $secondName,
    'login' => $login,
    'password1' => $password1,
    'password2' => $password2
];

$fileName = $login . '.json';

saveUserData($userData, $fileName);

echo "Данные успешно сохранены!";
} else echo "Неверный метод запроса.";