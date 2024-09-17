<?php

namespace Yasha\Wallet\Core;
class Route
{
    public $routes;

    public function __construct()
    {
        // Определение маршрутов
        $this->routes = [
            '/login' => [
                'class' => 'AuthController',
                'method' => 'login',
            ],
            '/logout' => [
                'class' => 'AuthController',
                'method' => 'logout',
            ],
            '/register' => [
                'class' => 'AuthController',
                'method' => 'register',
            ],
            '/dashboard' => [
                'class' => 'UserController',
                'method' => 'dashboard',
            ],
            '/currency/add' => [
                'class' => 'CurrencyController',
                'method' => 'add',
            ],
        ];
    }

    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];
        try {
            foreach ($this->routes as $pattern => $route) {
                if (preg_match("#^$pattern$#", $url, $matches)) {
                    $controllerName = 'Yasha\Wallet\Controllers\\' . $route['class'];
                    array_shift($matches); // Удаляем первый элемент из массива совпадений
                    $controller = new $controllerName();
                    call_user_func_array([$controller, $route['method']], $matches);
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