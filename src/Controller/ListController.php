<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\ListModel;

class ModalController extends AbstractController
{
    public function index()
    {
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $listModel= new ListModel();
        $lists = $listModel->findAll();
        $this->render('modal.php', [
            'lists' => $lists
        ]);

    }

}