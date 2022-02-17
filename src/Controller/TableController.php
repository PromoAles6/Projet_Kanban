<?php

namespace App\Controller;

use App\Model\ListModel;
use App\Model\ModalModel;
use App\Controller\AbstractController;

class TableController extends AbstractController
{
    public function index()
    {
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $listModel = new ListModel();
        $modalModel = new ModalModel();

        $cards = $modalModel->findAll();
        $lists = $listModel->findAll();

        // Pour chaque liste
        foreach($lists as $key => $list) {
            // j'initialise une liste de cards vides
            $list_cards = [];

            // Pour chaque card
            foreach($cards as $card) {
                // si card_id (l'id de la liste dans la card) est égal à l'id de la liste
                if($card->getList_id() == $list->getId()) {
                    // j'ajoute la card à la liste de cards
                    $list_cards[] = $card;
                }
            }

            // j'ajoute la liste de cards dans ma liste
            $lists[$key]->cards = $list_cards;

            // $lists[$key]->cards = array_filter($cards, function($card) use ($list_id) {
            //     return $card->getList_id() == $list_id;
            // });
        }

        $this->render('tableau/index.php', [
            'lists' => $lists,
            'cards' => $cards
        ]);
    }


    public function create()
    {
        // je récupère le name et le list_id depuis le formulaire
        // soumis en javascript
        $boardId = $_POST['boardId'];
        $name = $_POST['name'];

        // je crée une card
        $listModel= new ListModel();
        $newListId = $listModel->create($name, $boardId);

        // je renvoie l'id de la card en json
        $this->sendJson([
            'id' => $newListId
        ]);
    }
}

