<?php require_once("./function.php");
require_once("./config.php");
?>

<h1>Просмотр пользователя</h1>
<table cellspacing="2" border="1" cellpadding="5">
    <tr>
        <th>Пользователь(логин)</th>
        <th>Имя</th>
        <th>возраст</th>
        <th>описание</th>
        <th>Фотография</th>

    </tr>


    <tr>

        <?php
        foreach ($data['users'] as $user) : ?>

    <tr>
        <td> <?= $user->login ?></td>
        <td> <?= $user->username ?></td>
        <td> <?= $user->age; ?></td>
        <td> <?= $user->description ?></td>
        <?php if (file_exists($user->photo)) : ?>
            <td><img src='./../../<?= $user->photo ?>' width='250' height='150'/></td>


        <?php else: ?>
            <td></td>
        <?php endif; ?>

        <?php endforeach; ?>

    </tr>
</table>


<h3>Сменить фото</h3>


<form name="usernewphoto" action="" method="post" onsubmit="return false;">

    <br>
    <div>

        <br>
        <input name="userphoto" id="userphoto" type="file"/>

    </div>
    <br>
    <div>
        <div>
            <button type="submit">Сохранить</button>

        </div>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/main4.js"></script>
