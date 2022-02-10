<?php

namespace App\Controller;

use App\Controller\AbstractController;

class ModalController extends AbstractController
{

    public function index()
    {
        $this->render('modal.php');
    }
}
