<?php

namespace App\Controller;

use App\Controller\AbstractController;

class RegisterController extends AbstractController
{
    public function index()
    {
        // ma logique métier
        // exemple récupérer des donneés en BDD
        // traiter des formulaires
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('register.php');
    }
}