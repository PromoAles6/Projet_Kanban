<?php 
namespace App\Controller;

use App\Controller\InterfaceController;

abstract class abstractController implements InterfaceController
{
    public function render($view_path)
    {
        include_once  __DIR__.'/../View/'.$view_path;
    } 
    public function sendJson($data)
    {
        header('Content-type:application/json');
        echo json_encode($data);
    }
}