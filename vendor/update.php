<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$name = $_POST['name'];
$coname = $_POST['coname'];
$secondname = $_POST['secondname'];
$number = $_POST['number'];

/*
 * Делаем запрос на изменение строки в таблице assistants
 */

mysqli_query($connect, "UPDATE `assistants` SET `name` = '$name', `coname` = '$coname', `secondname` = '$secondname', `number` = '$number' WHERE `assistants`.`id` = '$id' ");

/*
 * Переадресация на главную страницу
 */

header('Location: /');
