<?php


namespace App\Controller;

class ErrorController extends AbstractController {
 
    public function error404(){

            //ma logique métier ici
            //récupérer des données en BDD
            //traiter des formulaire
          //  $this->render('errors/404.php');
          $this->sendJson([
              'status' => 404,
              'message' => 'Page not found',
          ]);
    }

 
}

?>