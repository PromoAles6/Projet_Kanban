<?php

namespace App\Controller;

class BoardController extends AbstractController
{
    public function index() {
        //ma logique metier
        $this->render('board.php');
    }
}