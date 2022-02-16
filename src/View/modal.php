<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link href="list.css" rel="stylesheet" />
  <link href="modal.css" rel="stylesheet" />
  <title>Hello, world!</title>
</head>

<body>

  <div class="container-xl">

    <form method="POST" action="" class="add-list">
      <input type="text" name="title_list" placeholder="Titre de la liste" class="form-control" id="title_list" aria-describedby="emailHelp" />
      <button type="submit" class="btn btn-primary" class="addList">Ajouter</button>
    </form>

    <?php foreach ($lists as $list) : ?>

      <div class="container-list">

        <div class="list">

          <h2><?= $list->getName() ?></h2>

          <div class="card">
            <button type="button" class="btn" id="addCard" data-bs-toggle="modal" data-bs-target="#modal" data-bs-whatever="@mdo">+ Ajouter une carte</button>
            <?php foreach ($cards as $card) : ?>
            <div>
                <?php if ($card->getList_id() === $list->getId()) : ?>
                  <button type="button" class="btn btn-<?= $card->getColor() ?>" data-bs-toggle="modal" data-bs-target="#modal<?= $card->getId() ?>" data-bs-whatever="@mdo"><?= $card->getName() ?></button>
                <?php endif ?>
            </div>


            <!-- Modal with id -->
            <div class="modal fade" id="modal<?= $card->getId() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <input class="modal-title" id="exampleModalLabel" placeholder="titre carte" value="<?= $card->getName() ?> "></input>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                    <form>

                      <div class="mb-3">
                        <label for="message-text" class="col-form-label"></label>
                        <textarea class="form-control" id="message-text" placeholder="rentrez votre description"><?= $card->getContent() ?> </textarea>
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
            </div>



            <!-- Modal without id -->
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <input class="modal-title" id="exampleModalLabel" placeholder="titre carte" value=""></input>
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
            </div>


          <?php endforeach ?>
          </div>
        </div>
      </div>

    <?php endforeach ?>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Script Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="./assets/ajax.js"></script>

  <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    var myButton = document.getElementById('addCard')

    myModal.addEventListener('shown.bs.modal', function() {
      myInput.focus()
    })

    myModal.addEventListener('shown.bs.modal', function() {
      myButton.focus()
      console.log('test')
    })
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>