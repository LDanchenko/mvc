<?php
require_once("config.php");
?>
<?php
if (!isset($_SESSION['userid'])) :?><h1 align="center">Авторизироватся</h1>
    <form id="autor_form" action="" onsubmit="return false;" style="position: fixed;  left: 50%; ">
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
        <button type="submit" id="avtorization_button">Авторизироваться</button>

    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/main4.js"></script>

<?php else : ?>
    <form name="form" action="quit" method="post">
        <h2>
            Вы авторизированы!
        </h2>

        <a href="/users/">Список пользователей</a>
        <br><br>
        <a href="/files/">Список файлов</a>
        <br>
        <br>
        <button type="submit" id="exit_button" class="btn btn-default">Выход</button>
    </form>
<?php endif; ?>