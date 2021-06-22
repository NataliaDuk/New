<?php

namespace APP;
class Router
{
    public function run()
    {
        $type = $_GET["type"] ?? "Main";
        $action = "action" . ($_GET["action"] ?? "index");
        $controllerName = "APP\\Controller\\$type";


        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $action)) {

                $controller->{$action}();
            } else {
//                echo "Метод не найден";
                header("HTTP/1.0 403 Not Forbidden");
                include __DIR__ . "/../templates/errors/403.php";
            }
        } else {
//            echo "Класс не найден";
            header("HTTP/1.0 404 Not Found");
            include __DIR__ . "/../templates/errors/404.php";
        }
    }
}
