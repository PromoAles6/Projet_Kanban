<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use App\Connection;
$Test = new Connection;
$Test->connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="modal.css"/>
    
    
    <title>Document</title>
</head>
<body>

  
  <div class="list-group">
    <?php foreach ($modals as $modal): ?>
      <div style="display: flex; flex-direction: column;">
        <a href="#" class="list-group-item list-group-item-action"><?= $modal->getName(); ?></a>
        <div><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">card1</button></div>
      <div><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">card2</button></div>
      <div><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">card3</button></div>
      <div><a href="#" class="list-group-item list-group-item-action">Ajouter une nouvelle carte</a></div>
    </div>  
  </div>
<?php endforeach; ?>
  
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <input class="modal-title" id="exampleModalLabel" placeholder="titre carte"></input>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          
          <div class="mb-3">
            <label for="message-text" class="col-form-label"></label>
            <textarea class="form-control" id="message-text" placeholder="rentrez votre description"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">enregister</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">supprimer</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">modifier</button>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-success">vert</button>
    <button type="button" class="btn btn-warning">jaune</button>
    <button type="button" class="btn btn-danger">rouge</button>
    <button type="button" class="btn btn-primary">bleu</button>
  </div>
      </div>
    </div>
  </div>
</div>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
