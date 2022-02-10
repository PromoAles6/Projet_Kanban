<?php

use App\database\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

class Application
{
    // je crée une const pour declarer la liste des pages autorisées 
    const AUTHORIZED_PAGES = [
            'projets' =>'board',
            'modal' => 'modal',
            'inscription' => 'register',
            'tableau' => 'tableau/index',
            'board' => 'tableau/index'
    ];

    const DEFAULT_ROUTE = 'projets';

    private function match($route_name)
    {
        // je verifie si la cle existe dans la liste des pages autorisées
        if (isset(self::AUTHORIZED_PAGES[$route_name])) {
            $route_name = self::AUTHORIZED_PAGES[$route_name];
        } else {
             // je définie la page sur erreur 404
            $route_name = '404';
        }
        return $route_name;
    }

   public function run ()
   {
       // je récupere la route demandée dans l'url
       // si la page n' est pas spécifiée (ex: on arrive pour la premiere fois sur le site)
       // on redirige vers la page d'accueil
       $route_name = $_GET['page'] ?? self::DEFAULT_ROUTE;
        
      // je vérifie si la route demandée existe
      $route_name = $this->match($route_name);
      
        // on inclu le fichier qui correspond à la route demandéé
       include_once $route_name . '.php';
   }
}
$application = new Application;
$application->run();