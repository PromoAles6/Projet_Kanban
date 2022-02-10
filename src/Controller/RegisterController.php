<?php

namespace App\Controller;

class RegisterController extends AbstractController
{
    public function index() {
        //ma logique metier
        $this->render('register.php');
    }
}