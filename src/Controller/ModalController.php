<?php

namespace App\Controller;

use App\Model\ModalModel;
use App\Controller\AbstractController;

class ModalController extends AbstractController
{
    public function index()
    {
        $cardModel = new ModalModel();

        $cards = $cardModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('modal.php', [
            'cards' => $cards
        ]);
    }
}