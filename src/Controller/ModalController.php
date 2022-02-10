<?php


namespace App\Controller;

class ModalController {

    public function index(){

            //ma logique métier ici
            //récupérer des données en BDD
            //traiter des formulaire
            $this->render('tableau/index.php');
    }

    private function render($view_path){
        include_once __DIR__.'/../View/' .$view_path;
    }
}

?>