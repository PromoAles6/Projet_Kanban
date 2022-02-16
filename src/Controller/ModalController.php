<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\ModalModel;

class ModalController extends AbstractController
{
    public function index()
    {
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $card_model= new ModalModel();
        $cards = $card_model->findAll();
        $this->render('modal.php', [
            'cards' => $cards
        ]);

    }
}