<?php 

namespace App\Controller;

use App\Controller\AbstractController;

class ModalController  extends AbstractController {
    public function index() 
    {
        // Ma logique metier ici en gros ce que je veux faire en php que l'utilisateur ne voit pas forcement
        $this->render('modal.php');
    }  
}