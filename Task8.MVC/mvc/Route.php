<?php

namespace MyProject\Mvc;

class Route {
    private $routes;

    public function __construct() {
        // Определение маршрутов
        $this->routes = [
            '/' => 'HomeController',
            '/user/(\d+)' => 'UserController',
        ];
    }

    public function run() {
        $url = $_SERVER['REQUEST_URI'];
        try {
            foreach ($this->routes as $pattern => $route) {
                if (preg_match("#^$pattern$#", $url, $matches)) {
                    $controllerName = 'MyProject\Mvc\Controller\\' . $route;
                    array_shift($matches); // Удаляем первый элемент из массива совпадений
                    $controller = new $controllerName();
                    call_user_func_array([$controller, 'index'], $matches);
                    return;
                }
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            return;
        }

        // Если ни один маршрут не подходит
        http_response_code(404);
        echo "404 Not Found";
    }
}