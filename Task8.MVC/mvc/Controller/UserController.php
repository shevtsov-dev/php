<?php

namespace MyProject\Mvc\Controller;

use MyProject\Mvc\Model\UserModel;

class UserController extends AbstractBaseController
{
    public function index($id)
    {
        $user = new UserModel();
        var_dump($user->getUserById($id));
    }
}