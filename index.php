<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

//connexion base de donnée
use App\Database;
$db = new Database();
$db-> Connect();
