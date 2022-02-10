<?php


namespace App\Controller;

use App\Controller\AbstractController;

class ErreurController extends AbstractController

{
public function Error404()
{
// ma logique metier ici 
//Exemple recuperé des donné en BDD
//traiter des formulaire
//vérifier que l'utilisateur a des droits 
//etc..
$this->render('Error/404.php');
$this->sendJson([
    'status'=>404,
    'message'=>'Page not FOund',
]);


}

    
}