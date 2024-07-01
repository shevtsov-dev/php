<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Авторизация</title>
</head>
<body>
    <form id="loginForm" action="./vendor/login.php" method="post" class="container">
        <div class="mb-3 mt-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин" autocomplete="off" minlength="3" maxlength="20" pattern="[A-Za-z][A-Za-z0-9_]*" title="Логин должен начинаться с буквы и содержать только буквы, цифры и символы подчеркивания" required>
        </div>
        <div class="mb-3">
            <label for="password1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="Введите пароль" autocomplete="off" required minlength="8" maxlength="20"  pattern="[^' ']+" title="Пробелы не допускаются">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
            <label class="form-check-label" for="rememberMe">Запомнить меня</label>
        </div>
        <button type="submit" class="btn btn-primary mb-3 signInBtn">Войти</button>
        <p>У меня нет аккаунта - <a class="link" href="./createAcc.php">зарегистрироваться</a>!</p>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>