<?php 
namespace App\Controller;

use App\Controller\AbstractController;


class TableController extends AbstractController
{
    public function index()
    {

        $this->render('tableau/index.php');
    }
}