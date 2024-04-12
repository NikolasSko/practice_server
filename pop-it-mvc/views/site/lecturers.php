<?php
if (!app()->auth->user()->id_role == '1'):
    ?>
    <h2 class="title">Список пользователей</h2>
    <a class="lecturers_add" href="add_lecturer">Добавить преподавателя</a>
    <ol class="list">
        <li class="lecturers_group">
            <p class="list_items">Иванов Иван Иванович 01.01.1952 Декан</p>
        </li>
        <li class="lecturers_group">
            <p class="list_items">Сидоров Михаил Анатольевич 02.07.1996 Преподаватель</p>
        </li>
        <li class="lecturers_group">
            <p class="list_items">Иванов Иван Иванович 01.01.1952 Декан</p>
        </li>
        <li class="lecturers_group">
            <p class="list_items">Сидоров Михаил Анатольевич 02.07.1996 Преподаватель</p>
        </li>

        <?php
        //    foreach ($posts as $post) {
        //        echo '<li>' . $post->title . '</li>';
        //    }
        ?>
    </ol>
<?php
else:
    ?>
    <h2 class="title">Список пользователей</h2>
    <a class="lecturers_add" href="add_dean">Добавить сотрудника деканата</a>
    <ol class="list">
        <li class="lecturers_group">
            <p class="list_items">Иванов Иван Иванович 01.01.1952 Декан</p>
            <a href="add_lecturer" class="lecturers_btn">Изм</a>
            <a href="#" class="lecturers_btn">Удал</a>
        </li>
        <li class="lecturers_group">
            <p class="list_items">Сидоров Михаил Анатольевич 02.07.1996 Преподаватель</p>
            <a href="add_lecturer" class="lecturers_btn">Изм</a>
            <a href="#" class="lecturers_btn">Удал</a>
        </li>
        <li class="lecturers_group">
            <p class="list_items">Иванов Иван Иванович 01.01.1952 Декан</p>
            <a href="add_lecturer" class="lecturers_btn">Изм</a>
            <a href="#" class="lecturers_btn">Удал</a>
        </li>
        <li class="lecturers_group">
            <p class="list_items">Сидоров Михаил Анатольевич 02.07.1996 Преподаватель</p>
            <a href="add_lecturer" class="lecturers_btn">Изм</a>
            <a href="#" class="lecturers_btn">Удал</a>
        </li>

        <?php
        //    foreach ($posts as $post) {
        //        echo '<li>' . $post->title . '</li>';
        //    }
        ?>
    </ol>
<?php
endif;
?>

