<?php 

namespace App\Controller ;

use App\Controller\AbstractController;

class ErrorController  extends AbstractController {
    public function error404() 
    {
        // Ma logique metier ici 
        $this->render('errors/404.php');
    }  
}