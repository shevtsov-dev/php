<?php

namespace Yasha\Wallet\Core;

class Controller {

    protected Request $request;
    public function __construct()
    {
        $this->request = new Request();
    }
    protected function view($view, $data = []) {
        extract($data);
        require "app/views/head.php";
        require "app/views/{$view}.php";
        require "app/views/footer.php";
    }
}