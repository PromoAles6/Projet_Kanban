<?php

namespace App\Controller;

use App\Model\CardModel;
use App\Model\ListModel;
use App\Controller\AbstractController;

class TableController extends AbstractController
{
    public function index()
    {
        $listModel = new ListModel();
        $cardModel = new CardModel();

        $list = $listModel->findAll();
        $cards = $cardModel->findAll();

        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        
        $this->render('tableau/index.php', [
            'list' => $list,
            'modals'=> $cards,
        ]);

    }
}