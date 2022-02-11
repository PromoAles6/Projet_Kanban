<?php

namespace App\Controller;

use App\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function error404()
    {
        $this->render('errors/404.php');
        // $this->sendJson([
        // 'status' => 404,
        //'message' => 'Page not found'
        // ]);
    }
}