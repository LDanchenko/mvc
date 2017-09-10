<?php

namespace App;

require_once("./function.php");
require_once("./config.php");

class Users
{

    public function index()
    {

        $data['users'] = \User::getAllUsers();

        $view = new \View();
        $view->render('users/index', $data);
    }


    public function asc()
    {

        $data['users'] = \User::getAsc();

        $view = new \View();
        $view->render('users/asc', $data);
    }

    public function desc()
    {

        $data['users'] = \User::getDesc();

        $view = new \View();
        $view->render('users/desc', $data);
    }

    public function save()
    {
        $file = $_FILES['userfile'];
        $im = isImage($file);
        if ($im == 1) {
            $uploaddir = './uploads/';
            $userid = $_SESSION['userid'];
            $name = $_FILES['userfile']['type'];
            $tmp = explode('/', $name);
            $type = end($tmp);
            $file = $userid . "." . $type;
            $uploadfile = $uploaddir . basename($file);
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $filepath = $uploaddir . basename($file);
                $username = strip_tags($_POST['username']);
                $birthday = $_POST['birthday'];
                $description = strip_tags($_POST['description']);
                \User::updateUser($userid, $filepath, $username, $birthday, $description);
                $out = 1;
            } else {
                $out = 2;
            }
        } else {
            $out = 0;
        }
        echo $out;

    }

    public function changePhoto(){
        var_dump($_FILES);
        $file = $_FILES['userphoto'];
        $r = $_POST['id'];
        echo 'rr   '. '  ' . $r . ' ' . $file;
        $uploaddir = './uploads/';
        $uploadfile = $uploaddir . basename($_FILES['userphoto']['name']);
        if (move_uploaded_file($_FILES['userphoto']['tmp_name'], $uploadfile)) {
            //$filepath = $uploaddir . basename($file);
            //$username = strip_tags($_POST['username']);
            //$birthday = $_POST['birthday'];
            //$description = strip_tags($_POST['description']);
           // \User::updateUser($userid, $filepath, $username, $birthday, $description);
            $out = 1;
        }
    }

    public function show(){
        $routes = explode('/', $_SERVER['REQUEST_URI']); //режем url на массив
        $id = (int)$routes[3];

        $data['users'] = \User::getUser($id);
        $view = new \View();
        $view->render('users/show', $data);
    }


}