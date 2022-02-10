<?php

namespace App\Controller;

use App\Controller\AbstractController;

class ModalController extends AbstractController
{
    public function index ()
    {
        // ma logique métier
        // exemple récupérer des données en BDD
        // traiter des formulaires
        // vérifier que l'utilisateur à les droits
        // etc ....

        $this->render('modal.php');
    }
}