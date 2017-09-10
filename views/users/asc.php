<?php require_once("./function.php"); ?>
<h1>Список пользователей по возрастанию</h1>
<table cellspacing="2" border="1" cellpadding="5">
    <tr>
        <th>Пользователь(логин)</th>
        <th>Имя</th>
        <th>возраст</th>
        <th>описание</th>
        <th>Фотография</th>
        <th>Совершеннолетний</th>
    </tr>

    <?php
    foreach ($data['users'] as $user) : ?>

    <tr>
        <td> <?= $user->id ?></td>
        <td> <?= $user->username ?></td>
        <td> <?= $user->age; ?></td>
        <td> <?= $user->description ?></td>
        <?php if (file_exists($user->photo)) : ?>
            <td><img src='./../<?= $user->photo ?>' width='250' height='150'/></td>


        <?php else: ?>
            <td></td>
        <?php endif; ?>
        <td><?= getUserAdult($user->age); ?></td>
        <?php endforeach; ?>


    </tr>
</table>

<p><a href="../users/index">Назад</a></p>


