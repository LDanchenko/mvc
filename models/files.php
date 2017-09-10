<?php
require_once ("vendor/autoload.php");

class Files extends \Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
    public static function getPhoto()
    {
        return User::all();
    }
}
// надо ли?