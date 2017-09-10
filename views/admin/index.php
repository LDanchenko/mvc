<?php
if (($_SESSION['userid'])==43) :?>

    <div>

        <br>
        Создайте пользователя
        <br><br>
    </div>

    <form name="create" action="" method="post" onsubmit="return false;">
        <div>
            <label>Логин</label>
            <div>
                <input type="text" name="login" id="login">
            </div>
        </div>
        <div>
            <label>Пароль</label>
            <div>
                <input type="password" name="pass1" id="pass1">
            </div>
        </div>
        <div>
            <label>Пароль (повтор)</label>
            <div>
                <input type="password" name="pass2" id="pass2">
            </div>
        </div>
        <br>

        <br>
        <div>
            <div>
                <button type="submit" id="create">Сохранить</button>

            </div>
        </div>
    </form>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/main4.js"></script>
