<?php
namespace App;

use App\database\Database;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';



class Application {
    const AUTHORIZED_PAGES =[

            'projets'=>'board',
            'modal'=>'modal',
            'inscriptions'=>'register',
            'tableau'=>'tableau/index',
            'board'=>'tableau/index'
        
    ];
    const DEFAULT_ROUTE = 'projets';
private function match($rout_name){

if(isset(self::AUTHORIZED_PAGES[$rout_name])){
            $rout_name=self::AUTHORIZED_PAGES[$rout_name];}
            else {
                $rout_name='404';
            }
return $rout_name;
    
}

    public function run()
    {
        //je definie les pages authorisée 
        $rout_name = $_GET['page'] ?? self::DEFAULT_ROUTE;
        
//je verifie si la route existe
$rout_name =$this->match($rout_name);
        //si la page demandée n'est pas dans la liste des page autorisee
        //je defini la page 404
        if(!in_array($rout_name,self::AUTHORIZED_PAGES)) {
            $rout_name ='404';
        }

        dump($rout_name);
        include_once $rout_name . '.php';
    }
}
$application = new Application();
$application->run();
