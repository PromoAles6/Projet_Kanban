<?php 

namespace App;
use \PDO;
class Db
{
    function Connect() {
        $config = parse_ini_file("config.dist.ini");
        try
     {
        $db = new PDO('mysql:host=' . $config["DB_HOST"] . ';dbname=' . $config["DB_NAME"], $config["DB_USERNAME"], $config["DB_PASSWORD"]);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo '<div>Connexion reussie</div>';
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    
     }
}