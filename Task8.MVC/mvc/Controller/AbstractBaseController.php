<?php

namespace MyProject\Mvc\Controller;

abstract class AbstractBaseController
{
    public function __construct()
    {
        $error = true;
        if($error) {
            http_response_code(400);
            throw new \Exception('Ploxo');
        }
    }
}