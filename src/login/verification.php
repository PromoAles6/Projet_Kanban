<?php

use App\database\Database;


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../../vendor/autoload.php';

session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    
    // Eviter la faille xss
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    
    if($email !== "" && $password !== "")
    {
        
        $connection = new Database or die('could not connect to databse');
        $dbh = $connection->getPDO();

        $check = $dbh->prepare("SELECT email, password FROM user WHERE email = ?");
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
    }
    if($row == 1)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL));
        {

            if($data['password'] === $password)
            {
                $_SESSION['user'] = $data['email'];
            }else header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }

    }else header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
}
else
{
  header('Location: login.php');
}
?>
