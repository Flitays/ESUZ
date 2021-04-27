<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>assistants</title>
    <?php include "config/script_css.php" ?>
</head>

<body>
    <div class="header">
        <h1>Единая система<br>
            <pl class="pl-5">Учёта запчастей
        </h1>
        <p>Главная | Обратная связь</p>
    </div>
    <div class="orange_shit"></div>


    <nav>
        <ul>
            <li>Установка</li>
            <li>Обслуживание</li>
            <li>Сделки</li>
            <li>Справочники</li>
            <li>Отчеты</li>
            <img src="">
        </ul>
    </nav>

    <div class="blue_shit"></div>

    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Телефон</th>
                <th></th>
                <th></th>
            </tr>

            <?php

            /*
             * Делаем выборку всех строк из таблицы "assistants"
             */

            $assistants = mysqli_query($connect, "SELECT * FROM `assistants`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $assistants = mysqli_fetch_all($assistants);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - name
             * Ключ 2 - coname
             * Ключ 3 - secondname
             * Ключ 4 - number
             */

            foreach ($assistants as $assistant) {
            ?>
                <tr>
                    <td><?= $assistant[0] ?></td>
                    <td><?= $assistant[1] ?></td>
                    <td><?= $assistant[2] ?></td>
                    <td><?= $assistant[3] ?></td>
                    <td><?= $assistant[4] ?></td>
                    <td><a href="update.php?id=<?= $assistant[0] ?>">Редактировать</a></td>
                    <td><a style="color: indianred;" href="vendor/delete.php?id=<?= $assistant[0] ?>">Удалить</a></td>
                </tr>
            <?php
            }
            ?>
        </table>


        <form action="vendor/create.php" method="post">
            <div class="input-group">
                <input type="text" name="name" class="form-control">
                <input type="text" name="coname" class="form-control">
                <input type="text" name="secondname" class="form-control">
                <input type="number" name="number" class="form-control">
                <button class="btn btn-add" type="submit">Добавить</button>
            </div>
        </form>

    </div>
</body>

</html>