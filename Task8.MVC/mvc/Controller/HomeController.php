<?php

namespace MyProject\Mvc\Controller;

use MyProject\Mvc\Model\UserModel;

class HomeController extends AbstractBaseController
{
    public function index()
    {
        $user = new UserModel();
        var_dump($user->getUser());

    }
}