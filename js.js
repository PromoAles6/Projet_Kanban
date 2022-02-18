$(".add-list").submit(function (event) {
  event.preventDefault();
  $(".container-xl").append(
    '<div class="container-list"><div class="list"><h2>' +
    $('input[name="title_list"]').val() +
    '</h2><button type="button" class="btn" id="addCard" data-bs-toggle="modal" data-bs-target="#list<?=$list->getId()?>" data-bs-whatever="@mdo">Bouton a modifier</button> </div></div>'
  );
  $('input[name="title_list"]').reset();
});

// key listener to add new list items
$('#addCard')
  .unbind()
  .keyup(function (event) {
    if (event.key == "Enter" || event.keyCode == "13") {
      $(this).before("<div>" + $(this).val() + "</div>");
      $(this).val("");
    }
  });

$(document).ready(function () {
  $.ajax({
    //L'URL de la requête 
    url: "http://localhost/Kanban/Projet_Kanban/?page=tableau#",

    //La méthode d'envoi (type de requête)
    method: "POST",

    //Le format de réponse attendu
    dataType: "text",
  })

});