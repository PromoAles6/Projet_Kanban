function updateListSortables() {
    $(".sortable").sortable({
        connectWith: ".sortable",
        items: ":not(.nodrag)",
        placeholder: "sortable-placeholder ui-corner-all",
        change: function() {
            var list = $(this).closest('.sortable');
            var anchorBottom = $(list).find('.anchorBottom');
            $(list).append($(anchorBottom).detach());
        }
    });

    // key listener to add new list items
    $('input[name="newlistitem"]').unbind().keyup(function(event) {
        if (event.key == "Enter" || event.keyCode == "13") {
            $(this).before('<div>' + $(this).val() + '</div>');
            $(this).val('');
        }

    });
}


$(document).ready(function() {
    updateListSortables();
    $(".oversort").sortable({ items: ":not(.nodrag)", placeholder: "sortable-placeholder" });



    // key listener to add new lists
    $('input[name="newlistname"]').keyup(function(event) {
        if (event.key == "Enter" || event.keyCode == "13") {
            $(this).before('<div class="sortable"><h5 class="nodrag header">' + $(this).val() + '</h5><input type="text" class="nodrag anchorBottom newlistitem" name="newlistitem" placeholder="Nouvelle Carte..." /></div>');
            $(this).val('');
            updateListSortables();

            var oversort = $(this).closest('.oversort');
            $(oversort).scrollLeft($(oversort).prop("scrollWidth") - $(oversort).width());
        }

    });
});

function send_data() {
    var list = document.getElementById('list').value;

    var httpr = new XMLHttpRequest();
    httpr.open("POST", "./ajax/GetData.php", true);
    httpr.setRequestHeader('Content-Type', 'application/x-www-form-url');
    httpr.onreadystatechange = function() {
        if (httpr.readyState == 4 && httpr.status == 200) {
            document.getElementById('response').innerHTML = httpr.responseText;
        }
    }
    httpr.send('list = ' + list)
}