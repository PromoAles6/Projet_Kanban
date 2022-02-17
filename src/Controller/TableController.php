<?php

namespace App\Controller;

use App\Model\ListModel;
use App\Model\CardModel;
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
        $cardModel = new CardModel();

        $cards = $cardModel->findAll();
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
}

