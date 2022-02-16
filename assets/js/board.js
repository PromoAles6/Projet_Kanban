
// fonction pour rendre les cards sortable
function updateListSortables(){
$( ".sortable" ).sortable({
    connectWith: ".sortable",
    items: ":not(.nodrag)",
    placeholder: "sortable-placeholder ui-corner-all",
    change: function() {
    console.log('change');
        var list = $(this).closest('.sortable');
        var anchorBottom = $(list).find('.anchorBottom');
        $(list).append($(anchorBottom).detach());
    }
});
}


$(document).ready(function(){
// on rend les card sortable
updateListSortables();

// on rend les listes, sortables
$("#listContainer").sortable({items: ":not(.nodrag)", placeholder: "sortable-placeholder" });


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
            <div class="nodrag">
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
    .addClass('sortable')
    // j'ajoute le titre de la liste
    .append('<h2 class="nodrag">'+listName+'</h2>')
    // j'ajoute le formulaire d'ajout de card
    .append($newCardForm)
    ;

    // je la rajoute dans la div avec l'id listContainer
    $("#listContainer").append($newList);

    // je vide l'input
    $("#titleList").val('');
})
});   