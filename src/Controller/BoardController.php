<?php

namespace App\Controller;

use App\Controller\AbstractController;


class BoardController extends AbstractController
{

    public function index()
    {
        $this->render('tableau/index.php');
    }
}
