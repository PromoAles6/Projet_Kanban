<?php
echo "c'est bon"; 
session_start();
include("../database/Database.php");
if(isset($_POST['email']) && isset($_POST['password'])){
    if($username !== "" && $password !== "")
    {
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
}