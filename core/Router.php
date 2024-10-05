<?php

require_once 'View.php';

class Router
{
    public static function dispatch($uri)
    {
        // Define routes
        $routes = [
            '' => 'HomeController@index',
        ];

        // Check if route exists
        if (array_key_exists($uri, $routes)) {
            list($controllerName, $method) = explode('@', $routes[$uri]);

            require_once "../app/Controllers/$controllerName.php"; // Load the controller

            $controller = new $controllerName();
            $controller->$method(); // Call the method
        } else {
            View::render('404'); // Show 404 if route doesn't exist
        }
    }
}
