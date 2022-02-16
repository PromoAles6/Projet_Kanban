<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link href="style.css" rel="stylesheet" />
  <script async src="//jsfiddle.net/b7mh945r/embed/"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <title>kanban</title>
</head>

<body>
<div class="container-xl">
    <form method="POST" action="liste.php" class="add-list">
      <input type="text" name="title_list" placeholder="Titre de la liste" class="form-control" id="title_list" aria-describedby="emailHelp" />
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

    <div class="container-list">
      <?php foreach($list as $list): ?>
        <div class="list">
          <h2><?= $list->getName() ?></h2>
          <?php foreach($cards as $card):
          // je verifie que les elements appartiennent a la bonne liste
            if ($card->getList_id() == $list->getId()) {
                ?> 
          <div class="card">
            <h3><?= $card->getName() ?></h3>
          </div>
          <?php
            } endforeach ?>
          <a href="#" class="btn">+ Ajouter une carte</a>
        </div>
      <?php endforeach ?>
      </div>
    </div>
  </div>
  <div class="oversort">
	<input type="text" class="newlistinput" name="newlistname" placeholder="Add New List..." />
</div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>