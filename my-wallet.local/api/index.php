<?php

use Yasha\Wallet\Models\Purchase;

require '../vendor/autoload.php';

init($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

session_start();
function init($method, $endpoint)
{
    global $user;
    session_start();
    $access_token = $_GET['access_token'] ?? '';
    $user = auth($access_token);

    if($user != null) {
        $endpoint = str_replace('/api/', '_', $endpoint);
        $endpoint = str_replace('/', '_', $endpoint);
        $endpoint = stristr($endpoint, '?', true);
        $function_name = 'api_' . mb_strtolower($method) . $endpoint;
        if (function_exists($function_name)) {
            header("Content-Type: application/json; charset=UTF-8");
            $function_name();
        } else {
            http_response_code(404);
            echo '404 Not Found';
        }
    } else {
        http_response_code(401);
        echo '401 Unauthorized';
    }
}

function auth($access_token)
{
    $user = new \Yasha\Wallet\Models\User();
    $arUser = $user->findByApiKey($access_token);

    if(empty($arUser)) {
        return null;
    }

    return $arUser;
}

/**
 * @return void
 */
function api_post_currency()
{
    global $user;
    (new Purchase())->create($user['id'], $_POST['currency'], $_POST['amount'], $_POST['date']);
    echo json_encode([
        'success' => true
    ]);
}