<?php

/*
 * Делаем константы для хранения данных о базе данных
 * HOST - адрес для подключения к БД
 * USER - логин для доступа к БД
 * PASSWORD - пароль для доступа к БД
 * DATABASE - название базы данных, к которой мы подключаемся
 */

define('HOST', '127.0.0.1:3306');
define('USER', 'mysql');
define('PASSWORD', 'mysql');
define('DATABASE', 'crud');

/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
 */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

/*
 * Делаем проверку соединения
 * Если есть ошибки, останавливаем код и выводим сообщение с ошибкой
 */

if (!$connect) {
    die('Error connect to database!');
}
