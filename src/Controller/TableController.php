<?php

namespace App\Controller;

class TableController extends AbstractController
{
    public function index() {
        
        $this->render('tableau/index.php');
    }
}