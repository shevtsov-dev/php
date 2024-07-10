<?php
session_start();

// Завершаем сессию
session_unset();
session_destroy();

// Удаляем куки, если они установлены
if (isset($_COOKIE['login'])) {
    setcookie('login', '', time() - 3600, "/");
}

// Перенаправляем пользователя на страницу входа или другую страницу
header('Location: ../signIn.php');
exit;
?>
