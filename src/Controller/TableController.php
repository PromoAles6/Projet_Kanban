<?php

namespace App\Controller;

use App\Model\ListModel;
use App\Controller\AbstractController;
use App\Model\ModalModel;

class TableController extends AbstractController
{
    public function index()
    {
        $listModel = new ListModel();
        $lists = $listModel->findAll();

        $cardModel = new ModalModel();
        $cards = $cardModel->findAll();

        foreach($lists as $key => $list) {
            $list_id = $list->getId();

            $list_cards = [];

            foreach($cards as $card) {
                if($card->getList_id() == $list->getId()) {
                    $list_cards[] = $card;
                }
            }

            $lists[$key]->cards = $list_cards;

            // $lists[$key]->cards = array_filter($cards, function($card) use ($list_id) {
            //     return $card->getList_id() == $list_id;
            // });
        }
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('tableau/index.php', [
            'lists' => $lists,
            'cards' => $cards = []
        ]);
        // dump($lists);
    }
}