<?php require_once("./function.php");
require_once("./config.php");
?>



<h1>Список пользователей</h1>
<table cellspacing="2" border="1" cellpadding="5">
    <tr>
        <th> id</th>
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
        <td> <a href="/users/show/<?= $user->id ?>"><?= $user->id ?></a></td>
        <td> <?= $user->login?></td>
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

<br>


<p><a href="../users/asc">Возраст по возрастанию</a></p>
<p><a href="../users/desc">Возраст по убыванию</a></p>

<?php
if (isset($_SESSION['userid'])) :?>

    <div>

        <br>
        Расскажите о себе
        <br><br>
    </div>

    <form name="uploader" action="" method="post" onsubmit="return false;">
        <div>
            <label>Имя</label>
            <div>
                <input type="text" name="username" id="username">
            </div>
        </div>
        <div>
            <label>Возраст</label>
            <div class="col-sm-10">
                <input type="number" name="birthday" id="birthday">
            </div>
        </div>
        <div>
            <label>Описание</label>
            <div>
                <input type="text" name="description" id="description">
            </div>
        </div>
        <br>
        <div>

            <label>Фото</label>
            <br>
            <br>
            <input name="userfile" id="userfile" type="file"/>

        </div>
        <br>
        <div>
            <div>
                <button type="submit" id="save">Сохранить</button>

            </div>
        </div>
    </form>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/mvc/js/main4.js"></script>