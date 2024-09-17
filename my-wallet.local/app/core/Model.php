<?php

namespace Yasha\Wallet\Core;

use PDO;

class Model
{
    protected $conn;

    public function __construct() {
        $config = require 'C:/OSPanel/home/my-wallet.local/app/config/db.php';
        $this->conn = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['password']);
    }
}