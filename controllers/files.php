<?php

namespace App;

require_once("./function.php");

class Files
{

    public function index()
    {

        $data['users'] = \User::getAllUsers();
        $view = new \View();
        $view->render('files/index', $data);
    }
}