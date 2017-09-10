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
        <th>Совершеннолетний</th>
    </tr>


    <tr>

        <?php foreach($data['users'] as $key => $user) : ?>
            <li><?=$key?><?=$user?>></li>
        <?php endforeach; ?>


    </tr>
</table>
