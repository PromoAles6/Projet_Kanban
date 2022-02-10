<?php

namespace App\Controller;

class ModalController {

    public function index()
    {
        $this-> render('modal.php');

    }

    private function render($view_path)
    {
        include_once __DIR__.'/../View/'.$view_path;
    }
}
