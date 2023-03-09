<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <main>
        <header>
            <h1>
                Домашняя работа по SQL запросам JOIN
            </h1>
            <h4 class="subtitle">
                Работа по урокам 7.7. и 7.8
            </h4>
        </header>
        <section class="code-php">
            <?php
            $nickname = "Александр";
            $hello = "Привет ";
            $offer = "Выполняем домашнее задание по пройденым темам на курсах по РНР.<br>
                      Данное задание касается взаимодействие между PHP и MySQL.<br><br>
                      Суть задания применить на практике полученные знания по работе с БД SQL и запросами к таблицам БД <br>
                      с последующим выводом данных из таблиц БД в браузер с помощью кода РНР.";

            echo "<h2 class='subtitle-php'>" . $hello . $nickname . "</h2>";
            echo "<h4 class='subtitle-php-4'>" . $offer . "</h4>";
            ?>

        </section>
        <section class="begin">
            <div class="bg-task">

                <h5 class="subtitle-task">
                    Задание 1
                </h5>
                <p>
                    Создаем новую таблицу <span class="new-table">description</span> в нашей БД study7.2lesson и заполняем её данными из таблицы movie.
                </p>
                <h5 class="subtitle-task">
                    Задание 2
                </h5>
                <p>
                    Проведите эксперименты с запросами INNER, LEFT и RIGHT JOIN в PhpMyAdmin
                </p>
                <h5 class="subtitle-task">
                    Задание 3
                </h5>
                <p>
                    Напишите эти же запросы на PHP и выведите данные в браузер
                </p>
            </div>
            <div class="bg-work">
                <p>
                    Выполнять задания начианем с первого.<br>
                    Выполнение первых двух заний будет непосредственно в БД через панель управления phpMyAdmin.<br>
                    А вот последнее задание будем уже выполнять непосредственно написанием кода РНР черз редактор кода и с последующей проверкой в браузере.
                </p>
                <p></p>
            </div>
            <div class=""></div>
        </section>
        <section class=""></section>
        <section class=""></section>
        <section class=""></section>
    </main>
</body>

</html>