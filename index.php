<?php

use App\database\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';



class Application {


        const AUTHORIZED_PAGES = [
            'tableaux' => 'board',
            'modal' => 'modal',
            'inscription' => 'register',
            'tableau' => 'tableau/index',
            'board' => 'tableau/index'
        ];

        private function match($route_name){

                  // je vérifie si la clef existe dans la liste des pages autorisées
                  if (isset(self::AUTHORIZED_PAGES[$route_name])) {
                    $route_name = self::AUTHORIZED_PAGES[$route_name];
                }else{
                    $route_name = '404';
                }
                return $route_name;
        }


        public function run(){
            //je récupère la route demandée dans l'url
            //si la page n'est pas spécifiée ( ex: on arrive pour la première fois sur le site)
            //on redirige vers la page d'accueil

            $route_name = $_GET['page'] ?? 'projets';
            $route_name = $this->match($route_name);
            //liste des pages autorisées
        

      



            include_once $route_name . '.php';

        }

}
$application = new Application();
$application ->run();