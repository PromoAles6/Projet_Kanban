<?php

namespace App\Controller;

use App\Controller\AbstractController;

class TableController extends AbstractController
{
    public function index()
    {
        //ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('tableau/index.php');
    }


}