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

    <form id="newListForm" method="POST" action="" class="add-list">
      <input type="text" name="title_list" placeholder="Titre de la liste" class="form-control" id="titleList" aria-describedby="emailHelp" />
      <button type="submit" class="btn btn-primary" class="addList">Ajouter</button>
    </form>

    
    <div class="container-list">
      <!-- Boucle des liste -->
        <?php foreach ($lists as $list) : ?>
          <div class="list">
            
            <h2><?= $list->getName() ?></h2>
            
            <!-- Boucle des cards -->
            <?php foreach ($cards as $card) : ?>
              <div class="card">
                <div>
                  <?php if ($card->getList_id() === $list->getId()) : ?>
                    <button type="button" class="btn btn-<?= $card->getColor() ?>" data-bs-toggle="modal" data-bs-target="#modal<?= $card->getId() ?>" data-bs-whatever="@mdo"><?= $card->getName() ?></button>
                  <?php endif ?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
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
 
                if(name==''|| board_id =='1'|| sort=='1') {
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
  <script>

  function updateListSortables(){
    $( ".sortable" ).sortable({
      connectWith: ".sortable",
      items: ":not(.nodrag)",
      placeholder: "sortable-placeholder ui-corner-all",
      change: function() {
          var list = $(this).closest('.sortable');
          var anchorBottom = $(list).find('.anchorBottom');
          $(list).append($(anchorBottom).detach());
        }
    });
  }


  $(document).ready(function(){
    updateListSortables();
    $(".oversort").sortable({items: ":not(.nodrag)", placeholder: "sortable-placeholder" });
    


    // key listener to add new lists
    // $('input[name="newlistname"]').keyup(function(event){
    //   if(event.key == "Enter" || event.keyCode == "13"){
    //     updateListSortables();
        
    //     var oversort = $(this).closest('.oversort');
    //     $( oversort ).scrollLeft( $(oversort).prop("scrollWidth") - $(oversort).width() );
    //   }
      
    // });

    // function pour ajouter une card
    function addNewCard(event) {
      // si la touche tapée est entrée (clavier normal ou numérique)
      if(event.key == "Enter" || event.keyCode == "13"){
        // j'ajoute une nouvelle card juste avant l'input
        const cardContent = $(this).val().trim();
        if (cardContent == "") {
          return false;
        }

        // je créé une card
        const newCard = `
          <div class="card">
            <div>
                <button type="button" class="btn btn-">${cardContent}</button>
            </div>
          </div>      
        `;

        // j'ajoute la card
        $(this).before(newCard);

        // je vide l'input
        $(this).val('');
      }
    }

    // event pour ajouter une cards
    $('input[name="newlistitem"]').unbind().keyup(addNewCard);


    // ajouter une liste
    $('#newListForm').submit(function(event){
      // j'empêche de rechargement de la page
      event.preventDefault();
      // je récupère le nom de la liste dans l'input
      const listName = $("#titleList").val().trim();

      // si le nom de la liste est vide, je ne fais rien
      if(listName == "")
      {
        return false;
      }

      // je créé un formulaire d'ajout de card
      $newCardForm = $('<input>')
      // je set les attribut de mon input
        .attr({
            type: 'text',
            class: 'nodrag anchorBottom newlistitem form-control',
            name: 'newlistitem',
            placeholder: 'Ajouter une nouvelle carte'
        })
      ;

      // j'ajoute l'event à mon formulaire
      $($newCardForm).unbind().keyup(addNewCard)
      
      // je créé une nouvelle liste
      $newList = $('<div>')
        .addClass('list')
        // j'ajoute le titre de la liste
        .append('<h2>'+listName+'</h2>')
        // j'ajoute le formulaire d'ajout de card
        .append($newCardForm)
      ;

      // je la rajoute dans la div avec l'id listContainer
      $("#listContainer").append($newList);

      // je vide l'input
      $("#titleList").val('');
    })
  });   

  </script>
</body>

</html>