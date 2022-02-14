<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\ModalModel;

class ModalController extends AbstractController
{
    public function index()
    {
        $modalModel = new ModalModel();

        $modals = $modalModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('modal.php', [
            'modals' => $modals
        ]);
    }
}