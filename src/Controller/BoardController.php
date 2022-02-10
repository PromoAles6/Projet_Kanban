<?php

namespace App\Controller;

class BoardController {

    public function index()
    {
        $this-> render('board.php');

    }

    private function render($view_path)
    {
        include_once __DIR__.'/../View/'.$view_path;
    }
}