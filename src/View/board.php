<?php
namespace App;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

//connexion base de donnée
use App\Database;

$db = new Database();
$db->Connect();
?>

<!doctype html>
<html lang="fr">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/board.css">
<title>kanban</title>
</head>

<body>
<!----------------------navbar---------------------------------->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="#">Kanban</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Espace de travail
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item">Espace de travail</a></li>
<li><a class="dropdown-item" href="#"></a></li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="#"></a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Récent
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item">Tableaux récent</a></li>
<li><a class="dropdown-item" href="#"></a></li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="#"></a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Favoris
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item">Tableaux favoris</a></li>
<li><a class="dropdown-item" href="#"></a></li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="#"></a></li>
</ul>
<li class="nav-item">
<a class="nav-link" href="#">Créer</a>
</li>
</ul>
<form class="d-flex">
<input class="form-control me-2" type="search" placeholder="" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Rechercher</button>
<button type="button" class="btn btn-light">Se connecter</button>
</form>
</div>
</div>
</nav>
<!--------------------------fin navbar------------------------->
<h1>VOS ESPACES DE TRAVAIL</h1>

<!-------------Ajout du formulaire pour add un projet---------->
<form class="row gx-3 gy-2 align-items-center" method="POST" action="?page=createBoard">
  <div class="col-sm-3">
    <label class="visually-hidden" for="board_name">Nom du projet</label>
    <input type="text" class="form-control" id="board_name" placeholder="Ajouter un projet" name="board_name">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </div>
</form>
<!---------------------------card------------------------------>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php foreach($boards as $board): ?>
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"><a href="?page=tableau&board=<?= $board->getId() ?>" class="stretched-link"><?= $board->getName() ?></a></h5>
          <p class="card-text"></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>

