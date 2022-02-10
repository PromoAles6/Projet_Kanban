<?php
namespace App\Controller;


class RegisterController extends AbstractController
{
    public function index()
    {
        $this->render('register.php');
    }
}