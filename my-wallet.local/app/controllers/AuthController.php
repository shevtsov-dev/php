<?php

namespace Yasha\Wallet\Controllers;

use Yasha\Wallet\Core\Controller;
use Yasha\Wallet\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = (new User())->find($_POST['username']);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header('Location: /dashboard');
            } else {
                $this->view('auth/login', ['error' => 'Invalid credentials']);
            }
        } else {
            $this->view('auth/login');
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new User())->create($_POST['username'], $_POST['password']);
            header('Location: /login');
        } else {
            $this->view('auth/register');
        }
    }

    public function logout()
    {
        $_SESSION['user_id'] = null;
        session_destroy();
        header('Location: /login');
    }
}