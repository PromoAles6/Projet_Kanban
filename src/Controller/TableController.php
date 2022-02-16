<?php

namespace App\Controller;

use App\Model\ListModel;
use App\Model\ModalModel;
use App\Controller\AbstractController;

class TableController extends AbstractController
{
    public function index()
    {
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $listModel = new ListModel();

        $modalModel = new ModalModel();
        $cards = $modalModel->findAll();
        $lists = $listModel->findAll();
        $this->render('tableau/index.php', [
            'lists' => $lists,
            'cards' => $cards
        ]);
    }
}

