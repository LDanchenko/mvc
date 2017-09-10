<?php
require_once("vendor/autoload.php");

class User extends \Illuminate\Database\Eloquent\Model
{

    public $timestamps = false;


    public static function getAllUsers()
    {
        return User::all();
    }

    public static function getUser($id)
    {
        return User::where('id', '=', $id)->get();
    }

    public static function getAsc()
    {

        return User::orderBy('age', 'ASC')->get();
    }

    public static function getDesc()
    {

        return User::orderBy('age', 'DESC')->get();
    }

    public static function getUsersLogin($login)
    {

        return User::where('login', '=', $login)->get();
    }

    public static function createUser($login, $password)
    {
        $user = new User();
        $user->login = $login;
        $user->password = $password;
        $user->save();
    }

    public static function updateUser($id, $filepath, $username, $birthday, $description)
    {

        $user = User::find($id);
        $user->photo = $filepath;
        $user->username = $username;
        $user->age = $birthday;
        $user->description = $description;
        $user->save();
    }

    public static function updatePhoto($id, $filepath)
    {

        $user = User::find($id);
        $user->photo = $filepath;
        $user->save();
    }
}