<?php

namespace MyProject\Mvc\Model;

class UserModel
{
    public $table = 'user';

    public function getUser()
    {
        return [
            'id' => 1,
            'name' => 'John Doe',
        ];
    }

    public function getUserById($id)
    {
        $user = [
            0 => [
                'id' => 0,
                'name' => 'John 0',
            ],1 => [
                'id' => 1,
                'name' => 'John 1',
            ],2 => [
                'id' => 2,
                'name' => 'John 2',
            ],
        ];
        return $user[$id];
    }
}