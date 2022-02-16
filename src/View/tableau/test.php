
  <div class="container-xl">

<form method="POST" action="" class="add-list">
  <input type="text" name="title_list" placeholder="Titre de la liste" class="form-control" id="title_list" aria-describedby="emailHelp" />
  <button type="submit" class="btn btn-primary" class="addList">Ajouter</button>
</form>


  <div class="container-list">
  <?php foreach ($lists as $list) : ?>
    <div class="list">

      <h2><?= $list->getName() ?></h2>

      <div class="card">
        <button type="button" class="btn" id="addCard" data-bs-toggle="modal" data-bs-target="#modal" data-bs-whatever="@mdo">+ Ajouter une carte</button>
        <?php foreach ($cards as $card) : ?>
        <div class="myCards">
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
              
              <form method="POST" action="" class="edit-card">
                <div class="modal-body">
              
                  <div class="mb-3">
                    <input for="message-text" class="col-form-label" name="title_card">
                    <textarea class="form-control" id="message-text" placeholder="rentrez votre description"><?= $card->getContent() ?> </textarea>
                  </div> 

                </div>

                <div class="modal-footer">
                  
                  <button type="submit" class="btn btn-secondary" id="submit" data-bs-dismiss="modal">enregister</button>
                  <button type="submit" class="btn btn-secondary" id="delete" data-bs-dismiss="modal">supprimer</button>
                  <button type="submit" class="btn btn-secondary" id="edit" data-bs-dismiss="modal">modifier</button>
                
                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    
                    <div class="btn-group me-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-success">vert</button>
                      <button type="button" class="btn btn-warning">jaune</button>
                      <button type="button" class="btn btn-danger">rouge</button>
                      <button type="button" class="btn btn-primary">bleu</button>
                    </div>

                  </div>

                </div>
              </form>

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
                <form method="POST" action="" class="add-card">

                  <div class="mb-3">
                    <label for="message-text" class="col-form-label"></label>
                    <textarea class="form-control" id="message-text" placeholder="rentrez votre description"></textarea>
                  </div>

                
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

              </form>

            </div>
          </div>
        </div>


      <?php endforeach ?>
      </div>
    </div>

    <?php endforeach ?>
  </div>
</div>