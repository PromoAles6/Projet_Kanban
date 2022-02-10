<?php

namespace App\Controller;

interface InterfaceController
{
    function render($view_path);

    function sendJson($data);
}