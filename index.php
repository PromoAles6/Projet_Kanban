<?php

use App\database\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';


// Application 
class Application {
        const AUTHORIZED_PAGES = [
            'projets'=> [
                'controller'=>'BoardController',
                'method'=>'index'],
            'modal' =>[
                'controller'=> 'ModalController',
                'method' => 'index'
                ],
            'register' =>[
                 'controller'=> 'RegisterController',
                'method' => 'index'
                ],
            'tableau' =>[
                'controller'=> 'TableController',
                'method' => 'index'
            ],
            'error404' =>[
                'controller'=> 'ErrorController',
                'method' => 'error404'
                ]
           
        ]; 

        public function match($route_name) 
            {
     // je verifie si la clef existe dans la liste des pages autorisés 
            if (isset(self::AUTHORIZED_PAGES[$route_name])) 
                {
                $route = self::AUTHORIZED_PAGES[$route_name];
                }
            else    
            {
                $route =  self::AUTHORIZED_PAGES['error404'];
            }
            return $route;
        }
    
    public function run()
    {
        $route_name = $_GET['page'] ?? 'projets';
        $route = $this->match($route_name);
        // J'instancie le controleur correspondant a la route demandée
        $controller_name = 'App\Controller\\' . $route['controller'];
        $controller = new $controller_name();
        $method_name = $route['method'];
        $controller->$method_name();

    }
    
}


$application = new Application;
$application->run();



$connection = new Database;
$pdo = $connection->getPDO();