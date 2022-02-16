<?php

namespace App\Controller;

use App\Model\CardModel;
use App\Controller\AbstractController;

class ModalController extends AbstractController
{
    public function index()
    {
        $CardModel = new CardModel();

        $cards = $CardModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('modal.php', [
               'modals' => $cards
    ]);
  }
}