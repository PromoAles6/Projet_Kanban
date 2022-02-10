<?php 
namespace App\Controller;

use App\Controller\AbstractController;


class RegisterController extends AbstractController
{
    public function index()
    {

        $this->render('register.php');
    }
}