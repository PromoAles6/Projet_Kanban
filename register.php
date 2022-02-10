<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use App\database\User;



if (isset($_POST['email'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
}


if (!empty($password) && !empty($email))
{
    $enregistrer = new User;
    $enregistrer->adduser($email,$password);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page d'inscription</title>
</head>

<body>
    <form method="post">
    <div class='d-flex justify-content-center'>
        <div class='d-flex flex-column bd-highlight mb-3'>
        <label class="text-center">Email</label>
        <input type="text" name="email"><br>
        <label class="text-center">Mot de passe</label>
        <input type="password" name="password"><br>
        <div>
        </div>

        <br><br>
    
        <input type="submit" class="btn btn-secondary" value="Envoyer" >
    </form>
    </body>
 </html>