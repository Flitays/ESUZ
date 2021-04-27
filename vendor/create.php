<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */


$name = $_POST['name'];
$coname = $_POST['coname'];
$secondname = $_POST['secondname'];
$number = $_POST['number'];

/*
 * Делаем запрос на добавление новой строки в таблицу assistants
 */

mysqli_query($connect, "INSERT INTO `assistants` (`id`, `name`, `coname`, `secondname`, `number`) VALUES (NULL, '$name', '$coname', '$secondname','$number')");

/*
 * Переадресация на главную страницу
 */

header('Location: /');
