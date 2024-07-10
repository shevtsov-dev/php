<?php
session_start();
var_dump($_SESSION);
die();

//JWT (JSON Web Token) - это открытый стандарт (RFC 7519) для представления утверждающих данных в виде JSON-объекта.
//JWT состоит из трех частей, разделенных точками: заголовок (header), полезная нагрузка (payload) и подпись (signature).
//Заголовок (header) содержит метаданные о типе токена и используемом алгоритме шифрования, например:
// {
//     "typ": "JWT",
//     "alg": "HS256"
// }
//Полезная нагрузка (payload) содержит утверждения (claims) о пользователе или другие данные, например:
// {
//     "user_id": 123,
//     "username": "john.doe",
//     "role": "admin"
// }
//Подпись (signature) создается на основе закрытого ключа и используется для проверки подлинности данных. Подпись позволяет проверить, были ли данные токена изменены после его подписания.
//JWT может быть использован для аутентификации и передачи утверждений между стороной, без необходимости хранения состояния на сервере. Токены JWT защищены цифровой подписью и могут быть переданы через сеть в безопасном виде.
//
//В целом, JWT является удобным и безопасным способом передачи информации между различными системами, так как содержит самодостаточные данные, которые можно проверить на целостность и подлинность.

$key = "my_secret_key";
$jwt = null;
$data = $_GET;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($data['username']) && isset($data['password'])) {
    // Проверяем данные пользователя (лучше всего использовать зашифрованное хранение паролей)
    $username = $data['username'];
    $password = $data['password'];

    if ($username === 'admin' && $password === 'admin123') {
        $header = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
        $payload = json_encode(['username' => $username]);

        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        $signature = hash_hmac('sha256', "$base64UrlHeader.$base64UrlPayload", $key, true);
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        $jwt = "$base64UrlHeader.$base64UrlPayload.$base64UrlSignature";
    } else {
        http_response_code(401);
        var_dump(json_encode(array("message" => "no auth")));
        exit;
    }
} else {
    http_response_code(400);
    var_dump(json_encode(array("message" => "no corret request")));
    exit;
}

echo json_encode(array("jwt" => $jwt));