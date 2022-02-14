<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\ListModel;

class TableController extends AbstractController
{
    public function index()
    {
        $listModel = new ListModel();

        $lists = $listModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('tableau/index.php', [
            'lists' => $lists
        ]);
    }
}