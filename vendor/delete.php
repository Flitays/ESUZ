<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы assistants
 */

mysqli_query($connect, "DELETE FROM `assistants` WHERE `assistants`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Location: /');
