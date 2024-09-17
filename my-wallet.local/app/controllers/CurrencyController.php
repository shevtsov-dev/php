<?php

namespace Yasha\Wallet\Controllers;

use Yasha\Wallet\Core\Controller;
use Yasha\Wallet\Models\Purchase;

class CurrencyController extends Controller
{
    public function add()
    {
        $this->request->getPost();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new Purchase())->create($_SESSION['user_id'], $_POST['currency'], $_POST['amount'], $_POST['date']);
            header('Location: /dashboard');
        }
    }
}