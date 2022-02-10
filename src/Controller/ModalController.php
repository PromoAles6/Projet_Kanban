<?php
namespace App\Controller;


class ModalController extends AbstractController
{
    public function index()
    {
        $this->render('modal.php');
    }
}