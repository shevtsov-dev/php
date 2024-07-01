<?php
function checkLoginExists($login) {
    $filePath = '../users/' . $login . '.json';
    return file_exists($filePath);
}
function saveUserData($userData, $fileName) {
    $filePath = '../users/' . $fileName;
    if (!file_exists('../users/')) {
        mkdir('users', 0777, true);
    }
    file_put_contents($filePath, json_encode($userData, JSON_PRETTY_PRINT));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $firstName = $_POST['firstName'] ?? null;
    $secondName = $_POST['secondName'] ?? null;
    $login = $_POST['login'] ?? null;
    $password1 = $_POST['password1'] ?? null;
    $password2 = $_POST['password2'] ?? null;

    // Проверяем, что все данные заполнены
    if ($firstName && $secondName && $login && $password1 && $password2) {
        if (preg_match('/^[A-Za-zА-Яа-яЁё]+$/', $firstName) && preg_match('/^[A-Za-zА-Яа-яЁё]+$/', $secondName)) {
            if ($password1 === $password2) {
                $passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
                if (preg_match($passwordPattern, $password1)) {
                    if (checkLoginExists($login)) {
                        echo "Логин уже занят, выберите другой.";
                        exit; // Прерываем выполнение скрипта
                    }

                    $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

                        $userData = [
                            'firstName' => $firstName,
                            'secondName' => $secondName,
                            'login' => $login,
                            'password1' => $hashedPassword,
                        ];

                        $fileName = $login . '.json';

                        saveUserData($userData, $fileName);

                        echo '<script>window.location.href = "../registrateComplete.php";</script>';

                } else {
                    echo "Пароль не соответствует требованиям безопасности.";
                    }
            }
        } else {
            echo "Все поля формы должны быть заполнены.";
            }
    }
} else {
    echo "Неверный метод запроса.";
}
?>
