<?php

use Yasha\Wallet\Core\Route;

session_start();

require_once __DIR__ . "/vendor/autoload.php";

$router = new Route();
$router->run();