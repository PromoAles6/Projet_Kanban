<?php

use App\database\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

class Application {
    
    const AUTHORIZED_PAGES = [
        'projets' => 'board',
        'modal' => 'modal',
        'inscription'=> 'register',
        'tableau' => 'tableau/index',
        'board' => 'tableau/index'

    ];

    public function match($route_name){

        //Je vérifie si la clé existe dans la liste des pages autorisées
        if(isset(self::AUTHORIZED_PAGES[$route_name])){
            $route_name = self::AUTHORIZED_PAGES[$route_name];
        } else{
            $route_name = '404';
        }

            return $route_name;
    }

    public function run(){

        //Je récupère la route demandée dans l'URL
        //Si la page n'est pas spécifiée (ex: on arrive la première fois sur le site)
        //On redirige vers la page d'accueil
        $route_name = $_GET['page'] ?? 'projets';

        //Je vérifie si la route demandée est autorisée
        $route_name = $this->match($route_name);

        //On inclut le fichier qui correspond à la route demandée
        include_once $route_name . '.php';
    }
}

$application = new Application();
$application->run();