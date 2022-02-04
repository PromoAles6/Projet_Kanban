<?php

use App\database\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
$bonjour= ["Bonjour","Coucou", "Hola"];


$connection = new Database;
$pdo = $connection->getPDO();
dump($pdo);