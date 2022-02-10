<?php
namespace App\Controller;


class BoardController extends AbstractController
{
    public function index()
    {
        $this->render('board.php');
    }
}