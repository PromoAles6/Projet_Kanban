"use strict";



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
	
	// key listener to add new list items
	$('input[name="newlistitem"]').unbind().keyup(function(event){
		if(event.key == "Enter" || event.keyCode == "13"){
			$(this).before('<div>' + $(this).val() + '</div>');
			$(this).val('');
		}
		
	});
}


$(document).ready(function(){
	updateListSortables();
	$(".oversort").sortable({items: ":not(.nodrag)", placeholder: "sortable-placeholder" });
	


	// key listener to add new lists
	$('input[name="newlistname"]').keyup(function(event){
		if(event.key == "Enter" || event.keyCode == "13"){
			$(this).before('<div class="sortable"><h5 class="nodrag header">' + $(this).val() + '</h5><input type="text" class="nodrag anchorBottom newlistitem" name="newlistitem" placeholder="New List Item..." /></div>');
			$(this).val('');
			updateListSortables();
			
			var oversort = $(this).closest('.oversort');
			$( oversort ).scrollLeft( $(oversort).prop("scrollWidth") - $(oversort).width() );
		}
		
	});
});
