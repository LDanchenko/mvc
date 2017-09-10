<?php
namespace App;
require_once ('./config.php');
class Autorization
{
    public function index()
    {
        $view = new \View();
        $view->render('autorization/index');
    }

    public function autorzation()
    {
        $login = strip_tags($_POST['login']);
        $passwd = strip_tags($_POST['passwd']);
        $data['users'] = \User::getUsersLogin($login);

        foreach ($data['users'] as $user)
        {
            $id = $user->id;
            $password = $user->password;
        }
        //если пользователь есть
        if (isset($id)) {
            $hash = str_replace("\n", "", $password); //убрать перенос строк
            if (hash_equals($hash, crypt($passwd, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t'))) {
                $_SESSION['userid'] = $id;//сохраняем айди пользователя в сессию
                $exist = 1;//пароль прошел
            } else {
                $exist = 2; //пароль не подошел
            }
        }
        else {
            $exist = 0;

        }
        echo json_encode($exist);
    }
}