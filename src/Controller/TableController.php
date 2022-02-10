<?php

namespace App\Controller;

use App\Controller\AbstractController;

class TableController extends AbstractController
{

    protected function index()
    {
        $this->render('index.php');
    }
}
