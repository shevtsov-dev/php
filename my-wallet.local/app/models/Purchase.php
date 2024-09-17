<?php

namespace Yasha\Wallet\Models;

use PDO;
use Yasha\Wallet\Core\Model;

class Purchase extends Model
{
    public function create($userId, $currency, $amount, $date) {
        $stmt = $this->conn->prepare("INSERT INTO purchases (user_id, currency, currency_main, amount, date) VALUES (?, ?, 'BYN', ?, ?)");
        return $stmt->execute([$userId, $currency, $amount, $date]);
    }

    public function getByUser($userId) {
        $stmt = $this->conn->prepare("SELECT * FROM purchases WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}