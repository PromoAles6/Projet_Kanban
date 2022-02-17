<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\ListModel;

class ListController extends AbstractController
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

    public function create()
    {
        // je récupère le name et le board_id depuis le formulaire
        // soumis en javascript
        $boardId = $_POST['boardId'];
        $name = $_POST['name'];

        // je crée une list
        $listModel= new listModel();
        $newListId = $listModel->create($name, $boardId);

        // je renvoie l'id de la liste en json
        $this->sendJson([
            'id' => $newListId
        ]);
    }

}