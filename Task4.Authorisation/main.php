<?php
session_start();

if (!isset($_SESSION['login'])) {
    // Если пользователь не авторизован, перенаправляем его на страницу входа
    header('Location: signIn.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Hello world</title>
</head>
<body>
<main class="container raccoon__container">
    <div class="raccoon"><img class="raccoon__image" src="./img/raccoon-dance.gif" alt="raccoon-dance"></div>
    <h1 class="raccoon__text"> Мы дождались!!!</h1>
    <p class="raccoon__text" style="font-size: 18px"> Это первая игра написанная на JS, попробуй свои силы в ней!  </p>
    <a href="./games/tapOnMe/index.php">
        <button type="submit" class="btn btn-primary mb-3 regBtn" style="background-color: #a8c828;">ИГРАТЬ</button>
    </a>
    <a href="./vendor/logout.php">
        <button type="submit" class="btn btn-primary mb-3 regBtn btn-exit ">Выход</button>
    </a>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>