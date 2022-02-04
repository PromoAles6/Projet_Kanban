<?php 

namespace App;
use \PDO;


class Database
{
    public function Connect()
    {
        $config = parse_ini_file("config.dist.ini", true);
        try {
            $db = new PDO('mysql:host=' . $config["DB_HOST"] . ';dbname=' . $config["DB_NAME"], $config["DB_USERNAME"], $config["DB_PASSWORD"]);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo '<div>Connexion reussie</div>';
        } catch (\PDOException $e) {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
    }
}