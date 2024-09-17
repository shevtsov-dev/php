<?php

namespace Yasha\Wallet\Controllers;

use Yasha\Wallet\Core\Controller;
use Yasha\Wallet\Models\Purchase;

class UserController extends Controller
{
    public function dashboard()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $userId = $_SESSION['user_id'];
        $purchases = (new Purchase())->getByUser($userId);

        $labels = [];
        $amount = [];
        foreach ($purchases as $purchase) {
            $labels[] = $purchase['date'];
            $amount[] = $purchase['amount'];
        }
        $amount[] = max($amount) + min($amount);

        //EXAMPLE отправка запроса
        /*$ch = curl_init("https://my-wallet.local/api/currency?access_token=ef2d127de37b942baad06145e54b0c619a1f22327b2ebbcfbec78f5564afe39d");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $json = curl_exec($ch);
        curl_close($ch);
        var_dump($json);*/

        $this->view('user/dashboard', [
            'purchases' => $purchases,
            'labels' => $labels,
            'amount' => $amount,
        ]);
    }
}