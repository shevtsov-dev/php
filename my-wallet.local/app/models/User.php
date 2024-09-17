<?php

namespace Yasha\Wallet\Models;

use PDO;
use Yasha\Wallet\Core\Model;

class User extends Model
{
    public function create($username, $password) {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        return $stmt->execute([$username, password_hash($password, PASSWORD_BCRYPT)]);
    }

    public function find($username) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByApiKey($hash) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE api_key = ?");
        $stmt->execute([$hash]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}