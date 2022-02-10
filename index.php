<?php

use App\database\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';


// Application 
class Application {
    
        const AUTHORIZED_PAGES = [
            'projets'=> 'board',
            'modal' => 'modal',
            'inscription' => 'register',
            'tableau' => 'tableau/index',
            'board' => 'tableau/index'
        ]; 

        public function match($route_name) 
            {
     // je verifie si la clef existe dans la liste des pages autorisés 
            if (isset(self::AUTHORIZED_PAGES[$route_name])) 
                {
                $route_name = self::AUTHORIZED_PAGES[$route_name];
                }
            else    
            {
                $route_name = '404';
            }
            return $route_name;
        }
    
    public function run()
    {
        $route_name = $_GET['page'] ?? 'projets';
        $route_name = $this->match($route_name);
        include_once $route_name .'.php';
    }
    
}


$application = new Application;
$application->run();



$connection = new Database;
$pdo = $connection->getPDO();