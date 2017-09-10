<?php require_once("./function.php"); ?>
<h1>Список файлов</h1>
<table cellspacing="2" border="1" cellpadding="5">
    <tr>
        <th>Название файла</th>
        <th>Фотография</th>

    </tr>

    <?php
    foreach ($data['users'] as $user) : ?>
    <?php if (file_exists($user->photo)) : ?>
    <tr>
        <td> <?= $user->photo ?></td>


        <td><img src='./<?= $user->photo ?>' width='250' height='150'/></td>

        <?php endif; ?>

        <?php endforeach; ?>


    </tr>
</table>




