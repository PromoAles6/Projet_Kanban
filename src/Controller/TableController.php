<?php

namespace App\Controller;


use App\Model\ListModel;
use App\Controller\AbstractController;

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
        dump($lists);
        $this->render('tableau/index.php', [
            'lists' => $lists,
        ]);

    }
}