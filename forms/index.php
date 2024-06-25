<?php
/**
 * Формы - важный элемент веб-разработки, позволяющий взаимодействовать с пользователем. Основные атрибуты формы - это action (действие, куда будет отправлен запрос при отправке формы) и method (метод, который будет использоваться для отправки данных формы, обычно GET или POST).
 *
 * Элементы формы представляют собой различные виды полей, такие как: флажки (checkbox), выпадающие списки (select), радио-кнопки (radio buttons), текстовые поля ввода (text-input) и многострочные текстовые поля (textarea).
 *
 * GET и POST - это два основных метода HTTP-запросов, которые используются для отправки данных из формы на сервер. Глобальные переменные $_POST и $_GET в PHP содержат данные, отправленные методами POST и GET соответственно.
 *
 * Типы содержимого для отправки формы могут включать form-data, multipart/form-data и application/x-www-form-urlencoded, и каждый из них имеет свои особенности.
 *
 * Загрузка файлов на сервер с использованием формы позволяет передавать файлы на сервер. Для обработки загруженных файлов на сервере используется глобальная переменная $_FILES, которая содержит информацию о загруженных файлах, такую как имя файла, тип, размер и временный путь к файлу на сервере.
 *
 * При работе с формами важно учитывать безопасность и валидацию переданных данных, чтобы предотвратить возможные атаки, такие как внедрение SQL или XSS.
 */

?>
<form action="/forms/process.php" method="get">
    <input type="text" name="username" placeholder="Введите ваше имя">
    <input type="email" name="email" placeholder="Введите ваш email">
    <input type="checkbox" name="subscribe" value="1"> Хочу подписаться на рассылку
    <input type="file" name="file">
    <button type="submit">Отправить GET запрос</button>
</form>

<form action="/forms/process.php" method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Введите ваше имя">
    <input type="email" name="email" placeholder="Введите ваш email">
    <select name="gender">
        <option value="male">Мужской</option>
        <option value="female">Женский</option>
    </select>
    <textarea name="message" placeholder="Введите ваше сообщение"></textarea>
    <input type="file" name="file">
    <button type="submit">Отправить POST запрос</button>
</form>
