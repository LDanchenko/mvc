<?php

namespace App;
require_once('./config.php');
require_once('./function.php');

class Admin
{
    public function index()
    {
        $view = new \View();
        $view->render('admin/index');
    }

    public function create()
    {
        $login = strip_tags($_POST['login']);
        $passwd = strip_tags($_POST['passwd']);

        $data['users'] = \User::getUsersLogin($login);

        foreach ($data['users'] as $user) {
            $id = $user->id;

        }

//если уже есть такой логин
        if (isset($id)) {
            $exist = 1;
        } //если нет
        else {


            $password = cryptPass($passwd);
            $data['new'] = \User::createUser($login, $password);
            print_r($data['new']);
            $exist = 0;
        }
        echo json_encode($exist);


    }
}