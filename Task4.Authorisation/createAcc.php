<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./scripts/main.js"></script>
    <title>Регистрация</title>
</head>
<body>
<form class="container" action="./vendor/saveUser.php" method="post" onsubmit="return validateForm()">
    <div class="mb-3 mt-3">
        <label for="firstName" class="form-label">Имя</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Введите имя" autocomplete="off" maxlength="20" pattern="[^' ']+" title="Пробелы не допускаются" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="secondName" class="form-label">Фамилия</label>
        <input type="text" class="form-control" id="secondName" name="secondName" placeholder="Введите фамилию" autocomplete="off" maxlength="20" pattern="[^' ']+" title="Пробелы не допускаются" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="login" class="form-label">Логин</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин" autocomplete="off" minlength="3" maxlength="20" pattern="[A-Za-z][A-Za-z0-9_]*" title="Логин должен начинаться с буквы и содержать только буквы, цифры и символы подчеркивания" required>
    </div>
    <div class="mb-3">
        <label for="password1" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password1" name="password1" placeholder="Введите пароль" autocomplete="off" required minlength="8" maxlength="20"  pattern="[^' ']+" title="Пробелы не допускаются">
    </div>
    <div class="mb-3">
        <label for="password2" class="form-label">Повторите пароль</label>
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Повторите пароль" autocomplete="off" required minlength="8" maxlength="20" pattern="[^' ']+" title="Пробелы не допускаются">
    </div>
    <button type="submit" class="btn btn-primary mb-3 regBtn">Зарегестрироваться</button>
    <p>У меня уже есть аккаунт - <a class="link" href="signIn.php">войти</a>.</p>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

