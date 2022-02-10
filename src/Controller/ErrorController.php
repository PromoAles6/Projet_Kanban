<?php

namespace App\Controller;

class ErrorController extends AbstractController
{
    public function error404() {
        //ma logique metier
        //$this->render('errors/404.php');
        $this->sendJson(['test'=>'test']);
    }
}