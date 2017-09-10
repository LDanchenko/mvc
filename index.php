<?php
require_once ("core/views.php");
require_once  ("config.php");
require_once ("vendor/autoload.php");
//$request = substr($_SERVER['REQUEST_URI'], 4); //отрезали /mvc
$routes = explode('/', $_SERVER['REQUEST_URI']);

$controller_name = "Main";
$action_name = "index";

//получаем юрл из адресной строки
if(!empty($routes[1])){
//первый слэш /mvc/fff2/
$controller_name = $routes[1];
}

if(!empty($routes[2])){
//второй /nvc/fff/ffff2
    $action_name = strtolower($routes[2]);
}

$filename = "controllers/".strtolower($controller_name) . ".php";

//обработка ошибок
try {
    if (file_exists($filename)){
        require_once $filename;
    } else {
        throw new Exception('file not found:' . $filename);
    }
    $classname = "\App\\".ucfirst($controller_name); //localhost/mvc/classname
//http://localhost/mvc/users/index - файл users класс users метод index

    if (class_exists($classname)){
        $controller= new $classname();
    }
    else {
        throw new Exception('file found but class not found:' . $classname);
    }

    if (method_exists($controller, $action_name)){
        $controller->$action_name();

    }
    else{
        throw new Exception('class exist but method not found:' . $action_name);
    }
}
catch (Exception $e){
    if (file_exists("debug")) {
        echo $e->getMessage();
    }
    else {
        require_once ("errors/404.php");
    }
}





