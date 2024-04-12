<h2 class="title">Добавление преподавателя</h2>
<h3><?= $message ?? ''; ?></h3>
<form class="form_add_lecturer" method="post">
    <input class="login_input1" placeholder="Имя" type="text" name="name">
    <input class="login_input1" placeholder="Логин" type="text" name="login">
    <input class="login_input1" placeholder="Пароль" type="text" name="password">
<!--    <input class="login_input1" placeholder="Пол" type="text" name="gender">-->
<!--    <input class="login_input1" placeholder="Место прописки" type="text" name="place">-->
<!--    <input class="login_input1" placeholder="Должность" type="text" name="job">-->
    <button class="form_add_btn">Добавить</button>
</form>