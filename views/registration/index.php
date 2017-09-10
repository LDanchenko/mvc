<?php
require_once("config.php");
?>
<?php
if (!isset($_SESSION['userid'])) :?>
    <h1 align="center">Зарегистрироваться</h1>
    <form id="registr_form" action="" onsubmit="return false;" style="position: fixed;  left: 50%; ">
        <div>
            <label>Логин</label>
            <div>
                <input type="text" name="inputEmail3" id="inputEmail3" placeholder="Логин">
            </div>
        </div>
        <div>
            <label>Пароль</label>
            <div>
                <input type="password" name="inputPassword3" id="inputPassword3" placeholder="Пароль">
            </div>
        </div>
        <div>
            <label>Пароль (Повтор)</label>
            <div>
                <input type="password" name="inputPassword4" id="inputPassword4" placeholder="Пароль">
            </div>
        </div>
        <br>
        <button type="submit" id="registration_button">Зарегистрироваться</button>

    </form>
<?php else : ?>
    <form name="form" action="quit" method="post">
        <h2>
            Вы уже авторизировались!
        </h2>
        <button type="submit" id="exit_button" class="btn btn-default">Выход</button>
    </form>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/main4.js"></script>
