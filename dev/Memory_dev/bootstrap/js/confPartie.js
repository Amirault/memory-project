$(function(){
////// Gestion de la configuration d'une partie

	$('#nbJoueur').on('change', function() {
		// Choix du nombre de joueur dans la combobox
		// Désactivation des difficultées non utilisées
		nbJoueur = $('#nbJoueur').val();
		if (nbJoueur == 2){
			$( ".nbPaire[data-value=8]" ).removeAttr( "disabled" );
			$( ".nbPaire[data-value=18]" ).removeAttr( "disabled" );
			$( ".nbPaire[data-value=32]" ).removeAttr( "disabled" );
		}
		else if ((nbJoueur > 2)&&(nbJoueur <= 4)){
			$( ".nbPaire[data-value=8]" ).attr("disabled", "disabled");
			$( ".nbPaire[data-value=18]" ).removeAttr( "disabled" );
			$( ".nbPaire[data-value=32]" ).removeAttr( "disabled" );
		}
		else if (nbJoueur > 4){
			$( ".nbPaire[data-value=8]" ).attr("disabled", "disabled");
			$( ".nbPaire[data-value=18]" ).attr("disabled", "disabled");
			$( ".nbPaire[data-value=32]" ).removeAttr( "disabled" );
		}
	});
	$('.typePartie').click(function(){
		var typePartie = $(".typePartie.active").attr("data-value");
		// 1 = arcade
		// 0 = versus
		if (typePartie == 1){
			$("#nomPartie").attr("disabled", "disabled");
			$("#nbJoueur").attr("disabled", "disabled");
		}
		else{
			$("#nomPartie").removeAttr( "disabled" );
			$("#nbJoueur").removeAttr( "disabled" );
		}
		console.debug(typePartie);
	});
});