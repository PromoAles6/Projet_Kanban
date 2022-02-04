<?php

use App\database\Database;


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../vendor/autoload.php';

session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    
    if($username !== "" && $password !== "")
    {
        
        $connection = new Database;
        $dbh = $connection->getPDO();

        $requete = "SELECT count(*) FROM user where 
              email = '".$username."' and password = '".$password."' ";
        $exec_requete = $dbh->query($requete);
        $reponse      = $dbh->fetchAll($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
  header('Location: login.php');
}
?>
