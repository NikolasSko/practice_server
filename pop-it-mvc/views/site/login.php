<?= include('/practice_server/pop-it-mvc/views/layouts/main.php'); ?>

<div class="login">
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <h1 class="title">Авторизация</h1>
    <form class="login_form" method="post">
        <input placeholder="Введите логин" class="login_input1" type="text" name="login">
        <input placeholder="Введите пароль" class="login_input1" type="password" name="password">
        <button class="login_btn">Войти</button>
    </form>
</div>
<?php endif;
