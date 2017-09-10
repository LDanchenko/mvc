<?php

namespace App;

require_once ("./function.php");

class Files{

    public function index(){

        $data['users'] = \Files::getPhoto();
        $view = new \View();
        $view -> render('files/index', $data);
    }
}