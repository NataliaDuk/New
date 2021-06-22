<?php

namespace APP;
class Router
{
    public function run()
    {
        if (isset($_GET['type'])) {
            $controllerName = "APP\\Controller\\$_GET[type]";
            $controller = new $controllerName();
            if (isset($_GET["action"])) {
                $controller->{$_GET["action"]}();
            }
        }
    }
}