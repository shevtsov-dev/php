<?php
session_start();

// Проверка, что данные отправлены методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $login = $_POST['login'] ?? null;
    $password1 = $_POST['password1'] ?? null;
    $rememberMe = isset($_POST['rememberMe']);

    if (isValidCredentials($login, $password1)) {
        // Устанавливаем сессию для авторизованного пользователя
        $_SESSION['login'] = $login;

        if ($rememberMe) {
            setcookie('login', $login, time() + (86400 * 30), "/");
        } else {
            setcookie('login', '', time() - 3600, "/");
        }

        header('Location: ../main.php');
        exit;
    } else {
        // Если логин или пароль не совпадают, выводим сообщение об ошибке
        echo "Неверный логин или пароль.";
    }
} else {
    // Если данные не отправлены методом POST, выводим сообщение об ошибке
    echo "Неверный метод запроса.";
}

// Функция для проверки логина и пароля (примерная реализация)
function isValidCredentials($login, $password1) {
    $filePath = '../users/' . $login . '.json';
    if (file_exists($filePath)) {
        $userData = json_decode(file_get_contents($filePath), true);
        return isset($userData['password1']) && password_verify($password1, $userData['password1']);
    }
    return false;
}
?>
