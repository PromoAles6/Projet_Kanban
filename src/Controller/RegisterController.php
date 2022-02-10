<?php

namespace App\Controller;

class RegisterController {

    public function index()
    {
        $this-> render('register.php');

    }

    private function render($view_path)
    {
        include_once __DIR__.'/../View/'.$view_path;
    }
}