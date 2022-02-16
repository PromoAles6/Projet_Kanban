<?php

namespace App\Controller;

use App\Model\RegisterModel;
use App\Controller\AbstractController;

class RegisterController extends AbstractController
{
    public function index()
    {
        $registerModel = new RegisterModel();

        $user = $registerModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('register.php', [
            'register' => $user
        ]);
    }
}