<?php

namespace App\Controller;

class TableController {

    public function index()
    {
        $this-> render('index.php');

    }

    private function render($view_path)
    {
        include_once __DIR__.'/../View/'.$view_path;
    }
}