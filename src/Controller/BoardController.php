<?php


namespace App\Controller;

use App\Controller\AbstractController;

class BoardController extends AbstractController
{
public function index()
{
// ma logique metier ici 
//Exemple recuperé des donné en BDD
//traiter des formulaire
//vérifier que l'utilisateur a des droits 
//etc..
$this->render('board.php');


}

}