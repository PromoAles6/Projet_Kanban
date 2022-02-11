<?php

namespace App\Controller;
use App\Model\BoardModel;
use App\Controller\AbstractController;

class BoardController extends AbstractController
{
    public function index()
    {
        $boardModel = new BoardModel();

        $boards = $boardModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...

        $this->render('board.php', [
            'boards' => $boards
        ]);
    }
}