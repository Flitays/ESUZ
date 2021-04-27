<?php

/*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

require_once 'config/connect.php';

/*
     * Получаем ID продукта из адресной строки - /assistant.php?id=1
     */

$assistant_id = $_GET['id'];

/*
     * Делаем выборку строки с полученным ID выше
     */

$assistant = mysqli_query($connect, "SELECT * FROM `assistants` WHERE `id` = '$assistant_id'");

/*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

$assistant = mysqli_fetch_assoc($assistant);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update assistants</title>
</head>

<body>
    <h3>Update Assistant</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $assistant['id'] ?>">
        <p>Имя</p>
        <input type="text" name="name" value="<?= $assistant['name'] ?>">
        <p>Фамилия</p>
        <textarea name="coname"><?= $assistant['coname'] ?></textarea>
        <p>Отчество</p>
        <input type="text" name="secondname" value="<?= $assistant['secondname'] ?>">
        <p>Номер</p>
        <input type="number" name="number" value="<?= $assistant['number'] ?>"> <br> <br>
        <button type="submit">Обновить</button>
    </form>
</body>

</html>