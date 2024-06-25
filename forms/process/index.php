<?php

$result = [
    'success' => false,
    'msg' => '',
    'error' => []
];


if (!empty($_GET)) {
    $result['error'][] = 'no format';
} else {
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    if (empty($login)) {
        $result['error'][] = [
            'code' => 1,
            'msg' => 'login empty'
        ];
    }

    if (empty($pass)) {
        //throw new Exception('gad');
        $result['error'][] = [
            'code' => 2,
            'msg' => 'pass empty'
        ];
    }

    if (empty($result['error'])) {

        $result['success'] = true;
    }
}
echo json_encode($result);