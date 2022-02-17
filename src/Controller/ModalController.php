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

        $cardModel= new ModalModel();
        $cards = $cardModel->findAll();
        $this->render('modal.php', [
            'cards' => $cards
        ]);

    }

    public function create()
    {
        // je récupère le name et le list_id depuis le formulaire
        // soumis en javascript
        $listId = $_POST['listId'];
        $name = $_POST['name'];

        // je crée une card
        $cardModel= new ModalModel();
        $newCardId = $cardModel->create($name, $listId);

        // je renvoie l'id de la card en json
        $this->sendJson([
            'id' => $newCardId
        ]);
    }
}