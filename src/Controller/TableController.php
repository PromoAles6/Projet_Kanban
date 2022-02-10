<?php


namespace App\Controller;

class TableController {

    public function index(){

            //ma logique métier ici
            //récupérer des données en BDD
            //traiter des formulaire
            $this->render('tableau/index.php');
    }


}

?>