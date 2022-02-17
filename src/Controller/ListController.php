<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\ListModel;

class ListController extends AbstractController
{
    public function create()
    {
        // je récupère le name et le board_id depuis le formulaire
        // soumis en javascript
        $boardId = $_POST['boardId'];
        $name = $_POST['name'];

        // je crée une liste
        $listModel= new ListModel();
        $newListId = $listModel->create($name, $boardId);

        // je renvoie l'id de la liste en json
        $this->sendJson([
            'id' => $newListId
        ]);
    }
}