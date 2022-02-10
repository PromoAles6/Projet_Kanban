<?php

namespace App\Controller;

class ModalController extends AbstractController
{
    public function index() {
        //ma logique metier
        $this->render('modal.php');
    }
}