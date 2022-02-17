<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.structure.min.css" integrity="sha512-oM24YOsgj1yCDHwW895ZtK7zoDQgscnwkCLXcPUNsTRwoW1T1nDIuwkZq/O6oLYjpuz4DfEDr02Pguu68r4/3w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/theme.min.css" integrity="sha512-3ohtiPVQpf7DqYvqgqCwrRHkBL+pqYVrNCGG2DO5ztbSm6crATB1wKEYCIqHxxut4JLrF38gwERfOHLm5FTGAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/list.css" rel="stylesheet" />
  <link href="assets/css/modal.css" rel="stylesheet" />
  <title>Hello, world!</title>
  
</head>

<body>

  <div class="container-xl">

    <form id="newListForm" method="POST" action="" class="add-list">
      <input type="text" name="title_list" placeholder="Titre de la liste" class="form-control" id="titleList" aria-describedby="emailHelp" />
      <button type="submit" class="btn btn-primary" class="addList">Ajouter</button>
    </form>
    
    <div id="listContainer" class="container-list">
        <!-- Boucle des liste -->
        <?php foreach ($lists as $list) : ?>
          <div class="list sortable" data-list="<?= $list->getId() ?>">
            
            <h2 class="nodrag"><?= $list->getName() ?></h2>
            
            <!-- Boucle des cards -->
            <?php foreach ($list->cards as $card) : ?>
              <div class="card">
                <div class="nodrag">
                    <button type="button" class="btn btn-<?= $card->getColor() ?>" data-bs-toggle="modal" data-bs-target="#modal<?= $card->getId() ?>" data-bs-whatever="@mdo"><?= $card->getName() ?></button>
                </div>


                <!-- Modal with id -->
                <!-- <div class="modal fade" id="modal<?= $card->getId() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              </div> -->



              <!-- Modal without id -->
              <!-- <div class="modal fade" id="list<?=$list->getId()?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              </div> -->


              </div>
            <?php endforeach ?>
            <!-- fin boucle cards -->

            <!-- <button type="button" class="btn btn-secondary" id="addCard" data-bs-toggle="modal" data-bs-target="#list<?=$list->getId()?>" data-bs-whatever="@mdo">Ajouter une carte</button> -->
            <input type="text" class="nodrag anchorBottom newlistitem form-control" name="newlistitem" placeholder="Ajouter une nouvelle carte" />
          </div>
        <?php endforeach ?>
        <!-- fin boucle des listes -->
      </div>

  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Script Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- jquery ui -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- <script>
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
    <script>
        $(document).ready(function() {
 
            $("#submit").click(function() {
 
                var name = $("#title_list").val();
                var board_id = 1;
                var sort = 1;
 
                if(name==''= 'Y', board_id =='1'= 'Y', sort=='1') {
                    alert("Please fill all fields.");
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "store.php",
                    data: {
                        name = name,
                        board_id: board_id,
                        sort=sort,
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
                 
            });
        });
    </script>
  </script> -->

  <!-- script pour le drag and drop -->
  <script src="assets/js/board.js"></script>

</body>

</html>

