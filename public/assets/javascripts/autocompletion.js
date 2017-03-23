/*
 * Mise en place de l'autocompletion
 */

$(document).ready( function() {
	var metiers = [
	    "Laborantin",
	    "Ingénieur du son",
	    "Menuisier",
	    "Maitre-chien",
	    "Agriculteur",
	    "Scheme"
	];

	$("#metiers").autocomplete({	    
		source : metiers,
		appendTo: "#autocomp",
		select: function(event, ui) {
      		$("#metiers").val(ui.item.name);
			location.href = ui.item.name;
      		return false;
      	}
		/*focus: function( event, ui ) {
        	$("#recherche").val( ui.item.name );
        	return false;
      	},
      	select: function(event, ui) {
      		$("#recherche").val(ui.item.name);
			location.href = 'fiche_serie.php?search=' + ui.item.name;
      		return false;
      	},
      	appendTo: "#autocomp"
	}).data("ui-autocomplete")._renderItem = function(ul, item) {
		return $("<li>")
			.data("item.autocomplete", item)
			.append('<a><div class="list_item_container"><div class="image"><img src="' + item.poster_path + '"></div><div class="titre">' + item.name  + '</div></div></a>')
			.appendTo(ul);
	*/});
});