<?php

namespace Payments\Singleton;

use PDO;

class DataBase
{
    public PDO $db;
    public static DataBase $instance;

    public function __construct()
    {
        //подключени к БД
        $this->db = 'connect';
    }

    public static function getInstance(): ?DataBase
    {
        if (!self::$instance) {//Проверка на существование
            self::$instance = new DataBase();
        }
        return self::$instance;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}