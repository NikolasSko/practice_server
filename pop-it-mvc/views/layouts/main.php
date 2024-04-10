<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <link rel="stylesheet" href="/practice_server/pop-it-mvc/public/css/style.css">
</head>
<body>
<header>
    <nav>
        <img class="logo" src="/practice_server/pop-it-mvc/public/image/logo.png" alt="">
        <div class="links">
            <?php
            if (!app()->auth::check()):
                ?>
                <a class="enter" href="<?= app()->route->getUrl('/login') ?>">Вход</a>

            <?php
            else:
                ?>
                <a href="<?= app()->route->getUrl('/users') ?>">Сотрудники</a>
                <a href="<?= app()->route->getUrl('/login') ?>">Кафедры</a>
                <a href="<?= app()->route->getUrl('/login') ?>">Дисциплины</a>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
            <?php
            endif;
            ?>
        </div>

    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
